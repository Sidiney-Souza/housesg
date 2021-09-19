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
                        <a class="nav-link" href="{{ 'produtos' }}">Produtos</a>
                    </li>
                </ul>
                <div>
                    <div class="d-flex">
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-dark">My Profile</a>
                                @else

                                    <a href="{{ route('login') }}" class="btn btn-light">Long in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
    </nav>





    <div class="container">
        <center><h1><br>Melhor lugar não há.</h1><br></center>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 50rem;">
            @foreach ($produto as $produto)
                <div class="col">
                    <div class="card h-100">
                        <img class="card-img-top" width="10px" src="{{ asset('storage/' . $produto->foto) }}"><br>
                        <div class="card-body">
                            <h5 class="card-title">{{ $produto->nome }} R${{ $produto->preco }}</h5>
                            <a class="btn btn-danger" href='{{ route('produtos.show', ['produto' => $produto]) }}'>Buy now</a>
                            <a class="btn btn-danger" href='{{ route('produtos.show', ['produto' => $produto]) }}'>Add to cart</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">{{ $produto->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




</body>

</div>
</div>
</div>
