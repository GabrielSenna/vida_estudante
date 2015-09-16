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

                                <img src="{{ $user->getAvatar($user->id) }}" alt="" class="left avatar-search">

                                {{ $user->name }}
                                <br>
                                {{ $user->email }}
                                <br>
                                <p>Ocupação</p>

                            </a>
                            @if(Auth::user()->isStudent($user->id) || Auth::user()->isAdvisor($user->id))
                            @else
                                <a href="{{ route('addStudent', ['id'=>$user->id]) }}">Adicionar como estudante</a>
                            @endif
                            
                        @empty
                            <p class="collection-item">Você não possui amigos</p>
                        @endforelse
                    </div>

                </div>
            </div>
            <div class="col l4 m12 s12">

                <div class="collection white">
                    <h5 class="collection-item grey-text">Solicitações</h5>
                    @foreach(Auth::user()->friendRequested()->get() as $user)
                        <div class="right">
                            <div class="row">
                                <a href="{{ route('acceptFriend', ['id'=>$user->id]) }}" class="btn-floating add-person-friends friend-action"><i class="material-icons">add</i></a>
                            </div>
                            <div class="row">
                                <a href="{{ route('rejectFriend', ['id'=>$user->id]) }}" class="btn-floating remove-person-friends friend-action red lighten-2"><i class="material-icons">remove</i></a>
                            </div>


                        </div>

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

        </div>
    </div>

    


@stop