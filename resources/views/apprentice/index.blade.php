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
    <link rel="stylesheet" href="../cssxd/styles.css">
<center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="card">
                <div class="card-header">{{ $title }}</div>

                <div class="card-body">
               
                   <table id="example1" class="table table-striped">
                    <thead> 
                   <tr>
                        <th>id</th>
                        <th>Documentos</th>
                        <th>Nombre</th>
                        <th>Ciudad</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th><a href="{{ route('apprentice.add') }}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a></th>

                    </tr>
                </thead>
                
                <tbody>
                    @foreach($apprentices as $a)
                    <tr>
                        <td>{{$a->id}}</td>
                        <td>{{$a->document_number}}</td>
                        <td>{{$a->name}}</td>
                        <td>{{$a->city}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->telephone}}</td>
                        <td>
                            <a href="{{ route('apprentice.edit', $a->id) }}" class="btn btn-info btn-sm"><i class="fas fa-user-edit"></i></a>
                            
                            <button class="btn btn-danger btn-sm" id="prueba" value="{{ $a->id }}"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
</center>


 <script>
        $(document).on('click','#prueba',function(){
            var id = $(this).val()
         Swal.fire({
            title: 'segurito segurito?',
            text: "no hay marcha atras :c",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hasta la vista, baby!',
            cancelButtonText: 'nha dejalo asi :v!'
        }).then((result) => {
            if (result.isConfirmed) {

                Swal.fire(
                    'eliminado',
                    'Registro salio del servidor xd',
                    'Completado '
                    )
                $(location).attr('href','{{ url('apprentices/delete') }}/'+id);
            }
        })
    });
</script>



    @endsection
   
   
   