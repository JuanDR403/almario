@extends('layouts.adminlte')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                {!! Form::open(['url'=> route('apprentice.edit',$apprentice->id)]) !!}
                    
                    <form>
  <div class="mb-3">
    <label for="num 1" class="form-label">Numero Documento</label>
    {!! Form::number('document_number', $apprentice->document_number, ['class' => 'form-control'])!!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Nombre</label>
    {!! Form::text('name', $apprentice->name, ['class' => 'form-control']) !!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Ciudad</label>
    {!! Form::text('city', $apprentice->city, ['class' => 'form-control']) !!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Correo Electronico</label>
    {!! Form::email('email', $apprentice->email, ['class' => 'form-control']) !!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Telefono</label>
    {!! Form::number('telephone', $apprentice->telephone, ['class' => 'form-control']) !!}
  </div>
  {!! Form::submit('Modificar',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
                    {!! Form::close() !!} 
            
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
