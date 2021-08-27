@extends('user/layort')
        
@section('titulo', "lista de usuarios")

    @section('conteudo')  
        <h1>Todos os usuários</h1>
        <br><a href="{{route('user.create')}}">Novo usuário</a><br><br>
        
        @if(session('msg'))
            {{session('msg')}}<br><br>
        @endif
        
        @foreach($user as $user)    
          
         Id: {{$user->id}},
         Nome: {{$user->nome}} - 
        <a href='{{route('user.show', ['user'=>$user])}}'>Detalhes</a>
        <a href='{{route('user.edit', ['user'=>$user])}}'>Editar</a>
        <br>
        <form method="post" action="{{route('user.destroy', ['user'=>$user])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Apagar"><br>
        </form>
        
        @endforeach
    @endsection
        
        
