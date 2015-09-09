@extends('profile.layouts.master')

@section('content')

    <div class="container">

        <div class="collection">
            @if(!count($users))
                <span>Nenhum usuário encontrado.</span>
            @elseif(count($users) == 1)
                <span>1 usuário encontrado.</span>
            @else
                <span>{{ count($users) }} usuários encontrados.</span>
            @endif
            @foreach($users as $user)
                <a href="#" class="collection-item">

                    <img src="{{ $user->getAvatar($user->id) }}" alt="" class="left avatar-search">
                    {{ $user->name }}
                    <br>
                    {{ $user->email }}
                    <br>
                    <p>Ocupação</p>
                </a>



            @endforeach
        </div>
    </div>
@stop
