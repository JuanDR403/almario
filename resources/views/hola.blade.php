
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
                <div class="card-header">Hola</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hola, bienvenido a mi pagina Web
                </div>
            </div>
        </div>
    </div>
</div>
<br>
    <br>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <div class="card">
    <div class="card">
  <img src="../img2/fondo1.jpg" class="card-img-top" alt="...">
  <div class="card-body center">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{ route('form') }}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
    </div>
    <div class="col">
    <div class="card">
    <div class="card">
  <img src="../img2/fondo1.jpg" class="card-img-top" alt="...">
  <div class="card-body center">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
    </div>
    <div class="col">
    <div class="card">
    <div class="card">
  <img src="../img2/fondo1.jpg" class="card-img-top" alt="...">
  <div class="card-body center">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
      </div>
           
        
    
  </div>
</div>

    
</body>
</html>
@endsection
