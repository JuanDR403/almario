@extends('layouts.adminlte')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                {!! Form::open(['url'=> route('apprentice.add')]) !!}
                    
                    <form>
  <div class="mb-3">
    <label for="num 1" class="form-label">Numero Documento</label>
    {!! Form::number('document number', null, ['class' => 'form-control'])!!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Nombre</label>
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Ciudad</label>
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Correo Electronico</label>
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">Telefono</label>
    {!! Form::number('telephone', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::submit('Agregar',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
                    {!! Form::close() !!} 
            
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
