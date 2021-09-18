<html>

<head>
    <title>
        House's G
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>



<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a>
                <img src="storage/imagens/12.png" alt="" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ '/housesg/public' }}">House's G</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{'produtos'}}">Produtos</a>
                    </li>
                </ul>
                <div>
                    <div class="d-flex">
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                @else

                                    <a href="{{ route('login') }}" class="btn btn-dark">Long in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-light">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
    </nav>



        
        <div class="produto">
        @foreach ($produto as $produto)

            
            <img width="150px" src="{{ asset('storage/' . $produto->foto) }}"><br>
            {{ $produto->nome }}<br>
            Preço: {{ $produto->preco }}<br>
            <a href='{{ route('produto.show', ['produto' => $produto]) }}'>Detalhes</a>
    </div>
    @endforeach
</body>
