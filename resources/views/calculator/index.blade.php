@extends('layouts.adminlte')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
                    {!! Form::open(['url'=> route('resultado')]) !!}
                    
                    <form>
  <div class="mb-3">
    <label for="num 1" class="form-label">numero 1</label>
    {!! Form::text('num1', null, ['class' => 'form-control'])!!}
  </div>
  <div class="mb-3">
    <label for="num2" class="form-label">numero 2</label>
    {!! Form::text('num2', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::submit('+',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
  {!! Form::submit('x',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
  {!! Form::submit('/',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
  {!! Form::submit('-',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
  {!! Form::submit('**',['class'=> 'btn btn-primary','name'=>'op'] ) !!}
                    {!! Form::close() !!}        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
