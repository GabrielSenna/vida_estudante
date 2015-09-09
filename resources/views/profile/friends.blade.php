@extends('profile.layouts.master')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col l4">

                <div class="collection white">
                    <h5 class="collection-item">Solicitações</h5>
                    @foreach(Auth::user()->friendRequested()->get() as $user)
                        <div class="right">
                            <div class="row">
                                <a href="#" class="btn-floating add-person-friends friend-action blue"><i class="material-icons">add</i></a>
                            </div>
                            <div class="row">
                                <a href="#" class="btn-floating remove-person-friends friend-action red lighten-3"><i class="material-icons">remove</i></a>
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