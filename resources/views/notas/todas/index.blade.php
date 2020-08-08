@extends('layouts.app')

@section('content')
@can('moderador')
@include('notas.todas.modal')
@endcan
<div class="d-flex flex-wrap justify-content-around">
       
@foreach($notas as $nota)
@include('notas.todas.modal-delete')
<div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header"><b>{{$nota->titulo}}</b>
        <div class="small float-right">{{$nota->created_at}}</div>
    </div>
    <div class="card-body text-primary">
    <p class="card-text">{{$nota->texto}}</p>
    </div>
    <div class="card-footer">              
        <button type="button" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#modalEliminar-{{$nota->id}}">
            <i class="far fa-trash-alt"></i>
        </button>
        <a href="{{URL::action('NotasController@edit',$nota->id)}}">
            <button type="button" class="btn btn-secondary btn-sm float-right mr-1">
                <i class="fas fa-edit"></i>
            </button>
        </a>  
    </div>
    
</div>
@endforeach
</div>
@endsection