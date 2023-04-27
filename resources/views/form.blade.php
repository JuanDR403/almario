@extends('layouts.adminlte')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../cssxd/galery.css">
    
</head>
<body>
    <center>
        <br>
        <br>
        <br>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Queremos saber</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Dejanos saber que opinas de nosotros...
                
        <br>
        
<div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="q1" class="form-label">como le ha parecido nuestro servicio online?</label>
                            <input type="answer" class="form-control" id="q1">
                            <br>
                            <div id="answer" class="form-text"></div>
                        </div>
  
                        <div class="mb-3">
                            <label for="q2" class="form-label">Recomendaria nuestra pagina web?</label>
                            <input type="radio" name="transporte" value="1">si
                            <input type="radio" name="transporte" value="2">no
                            <br>
                            <label for="xd" class="form-label">y porque?</label>
                            <br>
                            <input type="answer" class="form-control" id="q2">
                        </div>
                        <br>
  <label for="q3" class="form-label">te parece util la informacion brindada por nuestra pagina web?</label>
  <br>
        <input type="radio" name="transporte" value="1">si
    <input type="radio" name="transporte" value="2">no
    <br>
    <label for="xd2" class="form-label">y porque?</label>
    <br>
    <input type="answer" class="form-control" id="q3">

<br>

<label for="q4" class="form-label">crees necesaria la documentacion de los datos de los aprendices para el buen manejo de la informacion?</label>
        <input type="radio" name="transporte" value="1">si
    <input type="radio" name="transporte" value="2">no
    <br>
    <label for="xd3" class="form-label">y porque?</label>
    <br>
    <input type="answer" class="form-control" id="q4">


<br>

<label for="q5" class="form-label">crees que la tierra es plana?</label>
        <input type="radio" name="transporte" value="1">si
    <input type="radio" name="transporte" value="2">no
    <br>
    <label for="xd4" class="form-label">y porque?</label>
    <br>
    <input type="answer" class="form-control" id="q5">
    <br>


    <div class="mb-3 form-check">
    <a href="{{ route('answer') }}" class="btn btn-primary">subir respuestas</a>
  </div>
  
  </form>
</div>
</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection