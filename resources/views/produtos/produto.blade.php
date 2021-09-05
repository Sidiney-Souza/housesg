@extends('produtos/layort')
        
@section('titulo', "lista dos produtos")

    @section('conteudo')  
        <h1>Todos os produtos</h1>
        <br><a href="{{route('produto.create')}}">Novo produto</a><br><br>
        
        @if(session('msg'))
            {{session('msg')}}<br><br>
        @endif
        
        @foreach($produto as $produto)      
          
         Nome: {{$produto->nome}}  <br>
         Preço: {{$produto->preco}} - 
        <a href='{{route('produto.show', ['produto'=>$produto])}}'>Detalhes</a>
        <a href='{{route('produto.edit', ['produto'=>$produto])}}'>Editar</a>
        <img width="40px" src="{{asset("storage/". $produto->foto)}}">
        <br>
        <form method="post" action="{{route('produto.destroy', ['produto'=>$produto])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar produto"><br>
            <br><br><br>
        </form>
        
        @endforeach
    @endsection
        
        
