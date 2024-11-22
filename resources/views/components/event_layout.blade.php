<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <style>
        /* Main utilizando Grid */
        .main {
            display: grid;
            grid-template-columns: 1fr 3fr; /* Sidebar 1/4, conteúdo 3/4 */
            gap: 20px;
            padding: 20px;
        }

        .sidebar {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }

        .content {
            background-color: #eaeaea;
            padding: 20px;
            border-radius: 5px;
        }

        .button-container {
            display: flex;
            gap: 10px;
            justify-content: right;
            align-items: center;
            margin-top: 20px;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .main {
            grid-template-columns: 1fr;
            }
        }
        </style>
    </head>
        <body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('events.index')}}">Home</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <form class="d-flex mx-auto my-2 my-lg-0" role="search">
                            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
                            <button class="btn btn-outline-light" type="submit">Procurar</button>
                        </form>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuário
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Sair</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        <div class="main">
            <div class="sidebar">
                <h3>Bem vindo, Usuário</h3>
                <div class="list-group">
                    <a href="{{ route('events.index')}}" class="list-group-item list-group-item-action active" aria-current="true">
                        <i class="bi bi-house"></i> Home</li>
                    </a>
                    <a href="{{ route('events.create')}}" class="list-group-item list-group-item-action"><i class="bi bi-plus-circle-fill"></i> Criar evento</li></a>
                    <a href="{{ route('events.show_all')}}" class="list-group-item list-group-item-action"><i class="bi bi-list-columns-reverse"></i> Lista de eventos</li></a>
                    <a href="#" class="list-group-item list-group-item-action"><i class="bi bi-person-lines-fill"></i> Meus eventos</li></a>
                  </div>
            </div>
            <div class="content">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{ $slot }}

            </div>
        </div>
    </body>
</html>