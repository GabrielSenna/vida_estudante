@extends('profile.layouts.master')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col l8 m12 s12">

                <div class="collection white">
                    <h5 class="collection-item grey-text">Alunos</h5>
                    <div class="">
                        @forelse(Auth::user()->students as $user)


                            <a href="#" class="collection-item">

                                <img src="{{ $user->getAvatar($user->id) }}" alt="" class="left avatar-search">

                                {{ $user->name }}
                                <br>
                                {{ $user->email }}
                                <br>
                                <p>Ocupação</p>

                            </a>

                        @empty
                            <p class="collection-item">Você não possui alunos</p>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>        
@stop