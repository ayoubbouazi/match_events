<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Partido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
            background-color: #f2f2f2;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
            width: 100%;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>

@include('temporadas.navbar')

<div class="container mt-5 w-50">
    <h1>Crear Nuevo Partido</h1>
    <form method="POST" action="{{ route('partidos.store', ['id' => $temporada->id]) }}">
        @csrf
        <!-- Campos del formulario para crear partido -->
        <div class="form-group">
            <label for="equipo_local">Equipo local:</label>
            <input type="text" class="form-control" id="equipo_local" name="equipo_local" value="{{ old('equipo_local') }}">
            @if ($errors->has('equipo_local'))
                <span style="color: red">{{ $errors->first('equipo_local') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="equipo_visitante">Equipo visitante:</label>
            <input type="text" name="equipo_visitante" class="form-control" value="{{ old('equipo_visitante') }}">
            @if ($errors->has('equipo_visitante'))
                <span style="color: red">{{ $errors->first('equipo_visitante') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="goles_local">Goles local:</label>
            <input type="text" name="goles_local" class="form-control" value="{{ old('goles_local') }}">
            @if ($errors->has('goles_local'))
                <span style="color: red">{{ $errors->first('goles_local') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="goles_visitante">Goles visitante:</label>
            <input type="text" name="goles_visitante" class="form-control" value="{{ old('goles_visitante') }}">
            @if ($errors->has('goles_visitante'))
                <span style="color: red">{{ $errors->first('goles_visitante') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}">
            @if ($errors->has('fecha'))
                <span style="color: red">{{ $errors->first('fecha') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" class="form-control" value="{{ old('hora') }}">
            @if ($errors->has('hora'))
                <span style="color: red">{{ $errors->first('hora') }}</span>
            @endif
        </div>
        <!-- Botón para enviar formulario -->
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
