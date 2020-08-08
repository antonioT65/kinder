@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>Lista de usuarios <a href="usuarios/create"><button type="button" class="btn btn-dark float-right">Agregar</button></a></h2>  
    <h6>
      @if($search)
      <div class="alert alert-primary" role="alert">
        Los resultados de la busqueda '{{$search}}' son:
      </div>
      @endif
    </h6>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Rol</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user1)
          <tr>
            <th scope="row">{{$user1->id}}</th>
            <td>{{$user1->name}}</td>
            <td>{{$user1->email}}</td>
            <td>
              @foreach($user1->roles as $rol)
                  {{$rol->name}}
              @endforeach
            </td>
            <td>
              <form action="{{route('usuarios.destroy',$user1->id)}}" method="POST">
                <a href="{{route('usuarios.show',$user1->id)}}"><button type="button" class="btn btn-secondary">Ver</button></a>
                <a href="{{route('usuarios.edit',$user1->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </td>
            
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="row">
        <div class="mx-auto">
          {{$users->links()}}
        </div>
      </div>
        
  </div>    
@endsection