
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
                <div class="card-header">ADSO</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido a mi pagina Web
                </div>
            </div>
        </div>
    </div>
</div>
        <br>
        <br>
        <section>
            <img src="img2/1.jpg" alt="">
            <img src="img2/2.jpg" alt="">
            <img src="img2/3.jpg" alt="">
            <img src="img2/4.jpg" alt="">
            <img src="img2/5.jpg" alt="">
            <img src="img2/6.jpg" alt="">
        </section>
    </center>
    <br>
    <br>
    <center><H1 class="text-black">
        "Aveces no es tan tan  
    </H1>
<h1 class="text-black">cuando es tin tin...</h1>
    <h1 class="text-black">Tomate un Momento para Que veas Quien eres." </h1> </center>

    
</body>
</html>
@endsection
