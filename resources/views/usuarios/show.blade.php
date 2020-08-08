@extends('layouts.app')

@section('content')
<div class="container">
<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <h1 class="display-4">{{$user->name}}</h1>
    <p class="lead">{{$user->email}}</p>
    <a href="{{url('usuarios')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
    </div>
  </div>
</div>
@endsection