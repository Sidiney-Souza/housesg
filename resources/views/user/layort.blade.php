<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/estilo.css">
    <title>House's G</title>
</head>

<body>
 


    <div class="menu">
        <ul>
            <li class="logo">House's G</li>
            <li class="right" ><a  href="{{ route('produto.index') }}">Produtos</a></li>
            <li class="right" ><a  href="{{ route('user.index') }}">Usuários</a></li>
            <li class="" >
                <form action="{{route('user.search')}}" method="POST" class="d-flex">
                    @csrf
                    <input class="form-control me-2" type="search" name="name" placeholder="Digite algo..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </li>
        </ul>
    </div>



    <div class="container">
        @yield('conteudo')
    </div>

</body>

</html>
