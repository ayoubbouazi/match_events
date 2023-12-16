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


        .custom-list {
            margin-top: 6rem !important;
            margin: auto;
            width: 80%; /* Increased width */
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flexbox to arrange content in a row */
        }

        .description {
            flex: 1; /* Take up 1/3 of the width */
            margin-right: 20px; /* Add some space between description and list */
        }

        .temporadas-list {
            flex: 2; /* Take up 2/3 of the width */
        }

        .temporadas-list div {
            background-color: #fff;
            padding: 1rem;
            margin: 1rem;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .temporadas-list a.btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- include navbar -->
    @include('header.navbar')

    <div class="custom-list">
        <div class="description">
            <h1>Descripción de la App</h1>
            <p><b>¡Bienvenido</b> a nuestra plataforma de gestión de temporadas y partidos! En este espacio, tienes la posibilidad de crear 
                y organizar temporadas para tus eventos deportivos favoritos. Con tan solo un clic, podrás explorar 
                detalladamente cada temporada, visualizando todos los partidos programados y los resultados de cada encuentro.
                <br/><br/>
                Crea nuevas temporadas con facilidad y personaliza sus detalles, estableciendo los años de inicio y fin. Al hacer clic
                en cada temporada, accederás a una vista completa que desglosa la información de cada partido,
                proporcionando resultados precisos y actualizados. 
                <br/><br/>
                Ya sea que estés organizando torneos deportivos o simplemente disfrutando del seguimiento de eventos, nuestra aplicación te brinda una manera intuitiva y efectiva de gestionar la información de temporadas y partidos. ¡                          Explora, organiza y disfruta de la experiencia completa con nuestra aplicación dedicada a los amantes del deporte!</p>
        </div>
        <div class="temporadas-list">
            <h1>Lista de Temporadas:</h1>
            @forelse($temporadas as $temporada)
            <div>
                <h4>Temporada: {{ $temporada->ano_inicio }} - {{ $temporada->ano_fin }}</h4>
                <p>{{ $temporada->description }}</p>
                <a href="{{ route('partidos', ['id' => $temporada->id]) }}" class="btn btn-primary">Ver Partidos</a></a>
                <!-- Add other relevant links as needed -->
            </div>
            @empty
            <h2>No hay temporadas disponibles.</h2>
            @endforelse
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
