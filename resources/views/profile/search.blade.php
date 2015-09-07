@extends('profile.layouts.master')

@section('content')
    <div class="container">
        <div class="collection">
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
