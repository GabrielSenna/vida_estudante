@extends('profile.layouts.master')

@section('content')
	<div class="container">
        <div class="row">
            <div class="col l8 m12 s12">

                <div class=" white card">
                    <div class="card-content">
                        
                    
                        <h5 class="blue-text text-darken-2">Alunos</h5>
                        <div >
                            @if(count(Auth::user()->students()))
                            <ul class="collection">
                                @foreach (Auth::user()->projectsFromAdvisor as $project)
                                <li class="collection-item"><h5><small>Projeto</small> {{ $project->title }}</h5>
                                    <ul class="collection">
                                        
                                            @foreach($project->students as $student)
                                                
                                                <a href="#" class="collection-item" style="padding-bottom:4%;">

                                                    <img src="{{ $student->getAvatar() }}" alt="" class="left avatar-search">

                                                    <strong class="blue-text text-darken-2">{{ $student->name }}</strong>
                                                    <br>
                                                    {{ $student->email }}
                                                    <br>
                                                    <p>{{ $student->occupation }}</p>

                                                </a>
                                                
                                                    
                                            @endforeach
                                        
                                    </ul>
                                    
                                </li>
                                    
                                @endforeach
                            </ul>
                                

                            @else
                            <h5>Você não tem alunos.</h5>
                                <br>
                                <p>Peça para que seu aluno crie um novo projeto e lhe adicione como orientador.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
@stop