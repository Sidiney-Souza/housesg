<html>

<head>
    <title>
        House's G
    </title>
    <style>
        .ok {
            font-size: 7em;
        }

        .search {
            padding-top: 12px;
            margin: none;

        }

        body {
            background-repeat: no-repeat ;
            background-size: 100% ;
            background-position: center ;
            background-image: url("https://cdn.pixabay.com/photo/2019/09/18/19/53/piano-4487573_960_720.jpg");
        }

        main{
            color:white;
        }

        #logcart {
            color: white;
            margin-right: 12px ;
        }

    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>



<body>

    <nav class="navbar transparent  navbar-expand-lg navbar-dark ">
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
                <a href="{{route('cart.index')}}" class="material-icons" id="logcart">shopping_cart</a>
                <div class="search">
                    <form action="{{ route('produtos.search') }}" method="POST" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" name="nome" placeholder="Busca por produtos"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
                    </form>
                </div>
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
    <main class="IMAGE">
        <div class=" ok">
            <center>
                <br>Welcome!
        </div>
        </center>
    </main>



    <br><br><br><br><br><br>
    <br><br><br>
    <style>
        .footer {
            background-color: #191919;

        }

        .li {
            list-style-type: none;
        }

    </style>
    <center>
        <footer class="footer">
            <br><br>
            <nav>
                <ul>
                    <li class="li"><a href="#">About the site</a></li>
                    <li class="li"><a href="#">Facebook</a></li>
                    <li class="li"><a href="#">Number for contact</a></li>
                </ul>
            </nav>
            <div style="color:white;">
                <small>Copyright © 2021 </small>
            </div>
            <br><br><br>
        </footer>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
