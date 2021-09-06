@extends('produtos/layort')

@section('titulo', 'lista dos produtos')

@section('conteudo')
    <h1>Todos os produtos</h1>
    <br><a href="{{ route('produto.create') }}">Novo produto</a><br><br>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <div class="produto">
        @if (session('msg'))
            {{ session('msg') }}<br><br>
        @endif

        @foreach ($produto as $produto)

            Nome: {{ $produto->nome }} <br>
            <img width="150px" src="{{ asset('storage/' . $produto->foto) }}"><br>
            Preço: {{ $produto->preco }} <br>
            <a href='{{ route('produto.show', ['produto' => $produto]) }}'>Detalhes</a>
            <a href='{{ route('produto.edit', ['produto' => $produto]) }}'>Editar</a>
            <br>
            <form method="post" action="{{ route('produto.destroy', ['produto' => $produto]) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Deletar produto"><br>
                <br><br><br>
            </form>
    </div>
    @endforeach
@endsection
