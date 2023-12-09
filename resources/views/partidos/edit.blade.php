<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Partido</title>
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
    <h1>Editar Partido</h1>

    <form method="POST" action="{{ route('partidos.update', ['id' => $partido->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="equipo_local">Equipo local:</label>
            <input type="text" name="equipo_local" class="form-control" value="{{ $partido->equipo_local }}" required>
        </div>
        <div class="form-group">
            <label for="equipo_visitante">Equipo visitante:</label>
            <input type="text" name="equipo_visitante" class="form-control" value="{{ $partido->equipo_visitante }}" required>
        </div>
        <div class="form-group">
            <label for="goles_local">Goles local:</label>
            <input type="text" name="goles_local" class="form-control" value="{{ $partido->goles_local }}">
        </div>
        <div class="form-group">
            <label for="goles_visitante">Goles visitante:</label>
            <input type="text" name="goles_visitante" class="form-control" value="{{ $partido->goles_visitante }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ $partido->fecha }}" required>
        </div>
        <div class="form-group">
            <label for="hora">Hora:</label>
            <input type="time" name="hora" class="form-control" value="{{ $partido->hora }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
