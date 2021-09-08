<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Novo Produto</h1>
        
        @if($msg = session('msg'))
            <p style="color: {{$msg[1]}};">{{$msg[0]}}</p>
        @endif
        
        <form method="post" action="{{route('produto.store')}}" enctype="multipart/form-data">
            @csrf
            Nome:
            <input type="text" name="nome"><br>
            Quantidade:
            <input type="number" name="qtd"><br>
            Preço:
            <input type="number" step="0.01" name="preco"><br>
            Descrição do Produto:
            <input type="textarea" name="descricao"><br>
            Foto:
            <input type="file" name="foto"><br>
            <input type="submit" name="Salvar"><br>
        </form><br><br><br>
            <a href='{{route('produto.index')}}'>Voltar</a>
    </body>
</html>
