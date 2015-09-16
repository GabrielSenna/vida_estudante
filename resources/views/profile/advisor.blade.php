@extends('profile.layouts.master')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col l8 m12 s12">

                <div class="collection white">
                    <h5 class="collection-item grey-text">Orientador</h5>
                    <div class="collection-item">
                        @if(count(Auth::user()->advisor))
                        
                            <img src="{{ $user->getAvatar($user->id) }}" alt="" class="left avatar-search">

                                {{ $user->name }}
                                <br>
                                {{ $user->email }}
                                <br>
                                <p>Ocupação</p>
                        @else
                        <h5>Você não tem um orientador.</h5>
                            <br>
                            <p>Peça para seu orientador lhe adicione à sua lista de alunos.</p>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>        
@stop