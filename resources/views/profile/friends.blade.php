@extends('profile.layouts.master')

@section('content')


    <div class="container">
        <div class="row">
            
            <div class="col l8 m12 s12">

                <div class="collection white">
                    <h5 class="collection-item grey-text">Amigos</h5>
                    <div class="">
                        @forelse(Auth::user()->myFriends() as $user)


                            <a href="#" class="collection-item">

                                <img src="{{ $user->getAvatar() }}" alt="" class="left avatar-search">

                                {{ $user->name }}
                                <br>
                                {{ $user->email }}
                                <br>
                                <p>Ocupação</p>

                            </a>
                            
                            
                        @empty
                            <p class="collection-item">Você não possui amigos</p>
                        @endforelse
                    </div>

                </div>
            </div>
            <div class="col l4 m12 s12">

                <div class="collection white">
                    <h5 class="collection-item grey-text">Solicitações</h5>
                    @forelse(Auth::user()->friendRequested()->get() as $user)
                        <div class="right">
                            <div class="row">
                                <a href="{{ route('acceptFriend', ['id'=>$user->id]) }}" class="btn-floating add-person-friends friend-action"><i class="material-icons">add</i></a>
                            </div>
                            <div class="row">
                                <a href="{{ route('rejectFriend', ['id'=>$user->id]) }}" class="btn-floating remove-person-friends friend-action red lighten-2"><i class="material-icons">remove</i></a>
                            </div>


                        </div>

                        <a href="#" class="collection-item">

                            <img src="{{ $user->getAvatar() }}" alt="" class="left avatar-search">

                            <span class="truncate">{{ $user->name }}</span>
                            <span class="truncate">{{ $user->email }}</span>
                            <p class="truncate">{{ $user->occupation }}</p>

                        </a>
                    @empty
                        <p class="collection-item">Você não possui solicitações</p>
                    @endforelse
                </div>
            </div>

        </div>
    </div>

    


@stop