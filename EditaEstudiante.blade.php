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

        <title>Agregar Estudiantes</title>
    </head>
    <body class="bg-white">
        <section>
            <div class="col-lg-5 bg-white d-flex flex-column align-items-end min-vh-100">
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100"></div>
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                    <h1 class="font-weight-bold mb-4">Agregar Estudiante</h1>
                    <form method="POST" action="{{route ('Lista.update' ,$estudiante)}}">
                    <input type="hidden" name="_method" value="patch"/>
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="mb-4">
                            <label for="exampleInputMatricula1" class="form-label font-weight-bold">Matricula</label>
                            <input
                                type="id"
                                name="Matricula"
                                class="form-control bg-dark-x border-0 mb-2"
                                placeholder="Ingresa tu matricula"
                                value="{{$estudiante->Matricula}}">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputNombre1" class="form-label font-weight-bold">Nombre</label>
                            <input
                                type="text"
                                name="Nombre"
                                class="form-control bg-dark-x border-0 mb-2"
                                placeholder="Ingresa tu nombre"
                                value="{{$estudiante->Nombre}}">

                            <!-- <label for="exampleInputNombre1" class="form-label
                            font-weight-bold">Email</label> <input type="text" name = "Email"
                            class="form-control bg-dark-x border-0" placeholder="Ingresa tu email" value="
                            -"<"-?php echo e(old('')); ?>" aria-describedby="emailHelp"> -->
                        </div>
                        <div class="mb-4">
                            <label for="exampleDireccion1" class="form-label font-weight-bold">Direccion</label>
                            <input
                                type="text"
                                name="Direccion"
                                class="form-control bg-dark-x border-0"
                                placeholder="Ingresa tu direccion"
                                value="{{$estudiante->Direccion}}">

                            <label for="exampleInputEmail1" class="form-label font-weight-bold"></label>
                            <button type="submit" value="Enviar" class="btn btn-primary w-100">Guardar</button>
                            <!--<input type="hidden" name="_token" value="-"<"?php echo e(csrf_token());
                            ?>">-->
                            {{ csrf_field() }}
                        </form>

                    </div>
                    <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                        <p class="d-inline-block mb-0"></p>
                        <a href="" class="text-light font-weight-bold text-decoration-none">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
            crossorigin="anonymous"></script>
    </body>
</html>
