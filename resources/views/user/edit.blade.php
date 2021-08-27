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
        <h1>Alteralção do usuario{{$user->name}}</h1>
        <form action="{{route('user.update', ['user'=>$user])}}" method="POST" >
            @csrf
            @method('PATCH')
            Nome:
            <input type="text" name="name" value="{{$user->name}}"><br>
            Idade:
            <input type="number" name="idade" value="{{$user->idade}}"><br>
            Contato:
            <input type="text" name="contato" value="{{$user->contato}}"><br>
            E-mail:
            <input type="text" name="email"value="{{$user->email}}"><br>
<!--            Senha:
            <input type="password" name="senha" value="{{$user->password}}"><br>-->
            <input type="submit" name="Guardar"><br>
        </form>
            
    </body>
</html>
