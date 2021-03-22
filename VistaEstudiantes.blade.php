<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
            crossorigin="anonymous">
        <link
            href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap"
            rel="stylesheet">
        <script src="https://kit.fontawesome.com/ffec4ec2ed.js" crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
        <title>Lista de Estudiantes</title>
    </head>
    <br>
    <body class="bg-white">
        <section></div-class-col>
        <div class="container">
            <br>
            <center>
                <h2>LISTA DE ESTUDIANTES</h2>
            </center>
            <br>

            <!-- <div class="col-xl-12"> <form action="{{route('Lista.index')}}" method=
            "get"> <div class="form row"> <div class="col sm-4"> <input type="text"
            class="form-control" name="texto"> </div> <div class="col auto"> <input
            type="submit" class="btm btn-primary" value="BUSCAR"> </div> </div>-->

            <div class="col-xl-12">
              <!--  <form action="{{route('Lista.index')}}" method="get">
                    <div class="form row">
                        <div class="col sm-4">
                            <input type="text" class="form-control" name="texto">
                        </div>
                        <div class="col auto">
                            <input type="submit" class="btm btn-primary" value="BUSCAR">
                        </div>
                    </form>-->

                    <br>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>
                                                Matrícula
                                            </th>
                                            <th>
                                                Nombre
                                            </th>
                                            <th>
                                                Dirección
                                            </th>
                                            <th>
                                                Acciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($estudiante as $estudiantes)
                                        <tr>
                                            <td>{{$estudiantes->Matricula}}</td>
                                            <td>{{$estudiantes->Nombre}}</td>
                                            <td>{{$estudiantes->Direccion}}</td>
                                            <td>
                                            <a href="{{ route ('Lista.edit',$estudiantes->id) }}" class="btn btn-primary btn-sm btn
btn-warning btn-sm">Actualizar</a>  
                                                <form method="POST" action="{{ url("Lista/{$estudiantes->id}") }}">
                                                {{ csrf_field()}}
                                                <input type="hidden" name="_method" value="delete"/>
                                                <button type="submit" onclick="return confirm ('¿Deseas Borrar?');">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div-class-col>
                    </div class>
                </div>
            </body>
</html>