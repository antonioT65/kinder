@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-sm-6">
    <form action="/usuarios" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="escribe tu nombre">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="escribe tu email">        
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <select name="rol" class="form-control">
                <option selected disabled>Elige un rol para este usuario</option>
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
        </div> 
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>        
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Canselar</button>
    </form>
</div>
</div>
</div>
@endsection