@extends('produtos/layort')

@section('titulo', 'lista dos produtos')

@section('conteudo')
<body>
    <h1>Todos os produtos</h1>
    <br><a href="{{ route('produto.create') }}">Novo produto</a><br><br>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />




        @if (session('msg'))
            {{ session('msg') }}<br><br>
        @endif

        
        <div class="produto">
        @foreach ($produto as $produto)

            
            <img width="150px" src="{{ asset('storage/' . $produto->foto) }}"><br>
            {{ $produto->nome }}<br>
            Preço: {{ $produto->preco }}<br>
            <a href='{{ route('produto.show', ['produto' => $produto]) }}'>Detalhes</a>
            <a href='{{ route('produto.edit', ['produto' => $produto]) }}'>Editar</a>
            
            <form method="post" action="{{ route('produto.destroy', ['produto' => $produto]) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Deletar produto">
            </form>
    </div>
    @endforeach
@endsection
</body>
<style>
    .produto{
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
    }
</style>
