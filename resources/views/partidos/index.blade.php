<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Partidos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style>
           body {
            padding: 20px;
            background-color: #f2f2f2;
        }

            h1 {
            font-size: 2rem;
            color: #333;
            margin: 1rem;
            }

            .btnCreate a{
            display: inline-block;
            padding: 0.5rem 1rem;
            margin: 1rem;
            background-color: #ff6600;
            color: #fff !important;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            }

            .btnCreate a:hover {
            background-color: #e55d00;
            }

            table {
            border-collapse: collapse;
            margin: 1rem;
            width: 100%;
            }

            thead {
            background-color: #333;
            color: #fff;
            }

            th,
            td {
            padding: 0.5rem;
            text-align: center;
            }

            th:first-child,
            td:first-child {
            text-align: left;
            }

            tr:nth-child(even) {
            background-color: #f2f2f2;
            }

            .btn {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            }
            .btn-danger {
            background-color: red;
            }
            .btn:hover {
            background-color: #666;
            }
            .alert-success {
                color: #155724;
                background-color: #d4edda;
                border-color: #c3e6cb;
                padding: 0.75rem;
                border-radius: 0.25rem;
            }

            .my-3 {
                margin-top: 0.75rem;
                margin-bottom: 0.75rem;
            }

        </style>
    </head>
    <body>

        @include('temporadas.navbar')

        <div class="">
            <h1>
                Lista de partidos de {{ $temporada->ano_inicio }} - {{
                $temporada->ano_fin }}
            </h1>
            <!-- Botón para crear partido -->
            <div class="btnCreate">
                <a href="{{ route('partidos.create', ['id' => $temporada->id]) }}"
                    >Crear partido</a
                >
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Equipo Local</th>
                        <th>Goles local</th>
                        <th>Equipo Visitante</th>
                        <th>Goles visitante</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partidos as $partido)
                    <tr>
                        <td>{{ $partido->fecha }}</td>
                        <td>{{ $partido->hora }}</td>
                        <td>{{ $partido->equipo_local }}</td>
                        <td>{{ $partido->goles_local }}</td>
                        <td>{{ $partido->equipo_visitante }}</td>
                        <td>{{ $partido->goles_visitante }}</td>
                        <td>
                            <a class="btn"
                                href="{{ route('partidos.edit', ['id' => $partido->id]) }}"
                                >Editar</a>
                        </td>
                        <td>
                            <form
                                action="{{ route('partidos.destroy', $partido->id) }}"
                                method="POST"
                            >
                                @csrf @method('DELETE')
                                <button class ="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    <?php session()->forget('success'); ?>
                @endif

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
