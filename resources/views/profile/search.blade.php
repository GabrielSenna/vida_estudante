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
                    <span class="truncate">{{ $user->name }}</span>
                    <p class="truncate">{{ $user->email }}</p>
                    <p class="truncate">{{ $user->occupation }}</p>

                </a>
                    @if(!Auth::user()->isFriend($user->id))
                        <a href="{{ route('addFriend', ['id'=> $user->id]) }}" class="btn-floating btn-sm" style="position:relative; bottom:45px; left:20px;"><i class="material-icons">add</i></a>
                    @endif
                    @if(Auth::user()->pendingFriend($user->id))
                        <a href="{{ route('addFriend', ['id'=> $user->id]) }}" class="btn-floating cyan btn-sm disabled" style="position:relative; bottom:45px; left:20px;"><i class="material-icons">add</i></a>
                    @endif
                
            @endforeach
        </div>
    </div>
@stop
