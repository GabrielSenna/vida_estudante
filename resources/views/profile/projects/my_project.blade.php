@extends('profile.layouts.master')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card col l7 m12 s12">
                <div class="card-content ">
                    @if(count(Auth::user()->projectsFromStudent))
                        <p>Deseja criar um projeto?</p>
                            <br>
                            <a href="{{ route('createProject') }}" class="btn">Criar novo projeto</a>
                            <br>
                            <br>   
                        <ul class="collapsible" data-collapsible="accordion">
                            @foreach (Auth::user()->projectsFromStudent as $project)
                                <li>
                                    <div class="collapsible-header">
                                        <h5 class="blue-text text-darken-2 title-project truncate">
                                            <strong>Projeto:</strong> <span>{{ $project->title }}</span>
                                            <i class="material-icons right hide-on-small-only" style="margin-right:5px; line-height:38px">keyboard_arrow_down</i>
                                        </h5>
                                    </div>
                                    <div class="collapsible-body">
                                        <div style="margin-left:15px; margin-right:15px; padding-top:10px;">
                                            <h6 class="grey-text text-darken-1"><strong>Título:</strong> {{ $project->title }}</h6>         
                                            <h6 class="grey-text text-darken-1"><strong>Assunto:</strong> {{ $project->subject }}</h6>
                                            <h6 class="grey-text text-darken-1"><strong>Tema:</strong> {{ $project->theme }}</h6>
                                            <h6 class="grey-text text-darken-1"><strong>Descrição:</strong></h6>
                                            <h6 class="grey-text text-darken-1">{{ $project->description }}</h6>
                                            <small>Última edição: {{ $project->updated_at->diffForHumans() }}</small>
                                            <br>

                                            <a href="{{ route('downloadProject', ['id'=>$project->id]) }}" class="btn blue">Baixar projeto</a>
                                            <a href="{{ route('editProject', ['id'=>$project->id]) }}" class="btn cyan darken-2">Editar projeto</a>
                                            @if(count($project->ratings))
                                               <br>
                                                <br>
                                                <div class="divider">
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col l6 m6 s6">
                                                        <span class="grey-text text-darken-2">Alunos: </span>
                                                        <ul>
                                                            @foreach($project->students as $student)
                                                                <li><a href="#">{{ $student->name }}</a></li>

                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="col l6 m6 s6">
                                                        <span class="grey-text text-darken-2">Orientadores: </span>
                                                        <ul>
                                                            @foreach($project->advisors as $advisor)
                                                                <li><a href="#">{{ $advisor->name }}</a></li>

                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @foreach($project->ratings as $rating)
                                                
                                                    <h6 style="font-weight:600;">Avaliado por: {{ $rating->advisor->name }}</h6>
                                                    <span style="font-weight:500">Nota: <span class="{{ ($rating->grade >= 6) ? 'green-text' : 'red-text' }}">{{ $rating->grade }}</span></span>
                                                    <br>
                                                    <span style="font-weight:500;">{{ $rating->getApproved() }}{!! ($rating->approved == 1) ? '<i class="material-icons green-text">check</i>' : '<i class="material-icons red-text">close</i>' !!}</span>
                                                    <div class="card z-depth-0 blue lighten-4">
                                                        <div class="card-content">
                                                            Comentário:
                                                            <div class="card z-depth-0">
                                                                <div class="card-content">
                                                                    <span class="grey-text text-darken-1">{{ $rating->comment }}</span>
                                                                </div>
                                                            </div>
                                                            <span class="right grey-text text-darken-2"><small>{{ $rating->updated_at->diffForHumans() }}</small></span>
                                                            <br>
                                                        </div>
                                                    </div>
                                                    <div class="divider">
                                                    </div>
                                                @endforeach
                                            @else
                                                <h5 class="grey-text">Nenhum orientador avaliou seu projeto ainda.</h5>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                 
                            @endforeach
                        </ul>
                    @else
                            <h5>Você não possui um projeto.</h5>
                            <p>Deseja criar um projeto?</p>
                            <br>
                            <a href="{{ route('createProject') }}" class="btn">Criar novo projeto</a>
                            <br>
                            <br>   
                    @endif
                    
                    <div class="divider"></div>
                </div>
            </div>
            

        </div>
    </div>
</div>

@stop