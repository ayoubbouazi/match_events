<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Temporada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
  body {
            padding: 20px;
            background-color: #f2f2f2;
        }
    .center-form {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 80vh;
    }

    .custom-form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Puedes ajustar los colores según tus preferencias */
    h1 {
        color: #333;
        /* Color del texto del encabezado */
    }
    </style>
</head>

<body>

    @include('header.navbar')

    <div class="center-form">

        <div class="col-md-4 custom-form">

            <h1 class="text-center">Crear Nueva Temporada</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('temporadas.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="ano_inicio">Año de inicio:</label>
                    <input type="text" class="form-control" name="ano_inicio" id="ano_inicio"
                        value="{{ old('ano_inicio') }}" required>
                </div>

                <div class="form-group">
                    <label for="ano_fin">Año de fin:</label>
                    <input type="text" class="form-control" name="ano_fin" id="ano_fin" value="{{ old('ano_fin') }}"
                        required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Crear Temporada</button>
            </form>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>