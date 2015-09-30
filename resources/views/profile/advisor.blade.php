@extends('profile.layouts.master')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col l8 m12 s12">

                <div class=" white card">
                    <div class="card-content">
                        
                    
                        <h5 class="blue-text text-darken-2">Orientadores</h5>
                        <div >
                            @if(count(Auth::user()->advisors()))
                            <ul class="collection">
                                @foreach (Auth::user()->projectsFromStudent as $project)
                                <li class="collection-item"><h5><small>Projeto</small> {{ $project->title }}</h5>
                                    <ul class="collection">
                                        
                                            @foreach($project->advisors as $advisor)
                                                
                                                <a href="#" class="collection-item" style="padding-bottom:4%;">

                                                    <img src="{{ $advisor->getAvatar() }}" alt="" class="left avatar-search">

                                                    <strong class="blue-text text-darken-2">{{ $advisor->name }}</strong>
                                                    <br>
                                                    {{ $advisor->email }}
                                                    <br>
                                                    <p>{{ $advisor->occupation }}</p>

                                                </a>
                                                
                                                    
                                            @endforeach
                                        
                                    </ul>
                                    
                                </li>
                                    
                                @endforeach
                            </ul>
                                

                            @else
                            <h5>Você não tem um orientador.</h5>
                                <br>
                                <p>Crie um projeto e defina seus orientadores.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
@stop