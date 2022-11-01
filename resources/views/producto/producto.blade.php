<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h3>Gestión de Productos</h3>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('producto.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 d-flex">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                            <input type="submit" class="btn btn-primary ms-4" value="Buscar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lx-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($productos)<=0)
                                <tr>
                                    <td colspan="8">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($productos as $producto)
                            <tr>
                                <td>Editar | Eliminar</td>
                                <td>{{$producto->id}}</td>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->precio}}</td>
                                <td>{{$producto->cantidad}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$productos->links()}}
                </div>
            </div>

        </div>

    </div>

</body>

</html>