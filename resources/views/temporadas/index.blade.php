<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporadas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
  body {
            padding: 20px;
            background-color: #f2f2f2;
        }

    .custom-list h1 {
        font-size: 2rem;
        color: #333;
        margin: 1rem;
    }

    .custom-list a {
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .custom-list:hover {
        color: #ff6600;
    }

    .custom-list {
        margin-top: 6rem !important;
        margin: auto;
        width: 30%;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .custom-list div {
        /* width: 20%; */
        background-color: #fff;
        padding: 1rem;
        margin: 1rem;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>

    <!-- include navbar -->
    @include('temporadas.navbar')

    <div class="custom-list">
        <h1>Lista de Temporadas: </h1>
        @foreach($temporadas as $temporada)
        <div>
            <a href="{{ route('partidos', ['id' => $temporada->id]) }}">Temporada: {{ $temporada->ano_inicio }} -
                {{ $temporada->ano_fin }}</a>
        </div>
        @endforeach
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>