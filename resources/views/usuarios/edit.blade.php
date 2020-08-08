@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-sm-6">
<h1>Editar usuario: {{$user->name}}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{route('usuarios.update',$user->id)}}" method="POST">
    @method('PATCH')    
    @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="escribe tu nombre">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="escribe tu email">        
        </div>
       
        <button type="submit" class="btn btn-primary">editar</button>
        <button type="reset" class="btn btn-danger">Canselar</button>
    </form>
</div>
</div>
</div>
@endsection