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
        <h1>Detalhes do usuário</h1>
        Id: {{$user->id}}<br>
        Nome:{{$user->name}}<br>
        Idade: {{$user->idade}}<br>
        Contato: {{$user->contato}}<br>
        E-mail: {{$user->email}}<br>
        Data do cadastro: {{$user->created_at}}<br>
        hora de atualização: {{$user->update_at}}<br>
        <br><br>
        <a href='{{route('user.index')}}'>Voltar</a>
    </body>
</html>
