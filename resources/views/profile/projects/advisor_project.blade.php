@extends('profile.layouts.master')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card col l7 m8 s12">
                <div class="card-content ">
                    @if(count(Auth::user()->projectsFromAdvisor))
                        
                        <ul class="collapsible" data-collapsible="accordion">
                            @foreach (Auth::user()->projectsFromAdvisor as $project)
                                
                                <li >
                                    <div class="collapsible-header">
                                            <h5 class="blue-text text-darken-2"><strong>Projeto:</strong> {{ $project->title }}<i class="material-icons right" style="margin-right:5px; line-height:38px">keyboard_arrow_down</i></h5>
                                    </div>
                                    <div class="collapsible-body">
                                        <div style="margin-left:15px">
                                            <h6 class="grey-text text-darken-1"><strong>Título:</strong> {{ $project->title }}</h6>         
                                            <h6 class="grey-text text-darken-1"><strong>Assunto:</strong> {{ $project->subject }}</h6>
                                            <h6 class="grey-text text-darken-1"><strong>Tema:</strong> {{ $project->theme }}</h6>
                                            <h6 class="grey-text text-darken-1"><strong>Descrição:</strong></h6>
                                            <h6 class="grey-text text-darken-1">{{ $project->description }}</h6>
                                            <a href="{{ route('downloadProject', ['id'=>$project->id]) }}" class="btn blue">Baixar projeto</a>  
                                            @if(count($project->ratings))
                                               {{ $project->ratings }}
                                            @else
                                                <h5 class="grey-text">Nenhuma avaliação disponível.</h5>
                                            @endif
                                                <span class="grey-text text-darken-3">Deseja avaliar este projeto?</span>
                                                <br>
                                                <a href="#" class="btn yellow darken-2">Avaliar projeto</a>
                                                <br>
                                                <br>
                                        </div>

                                        
                                    </div>
                                    
                                    
                                </li>
                                 
                            @endforeach
                        </ul>
                    @else
                            <h5>Você não orienta nenhum projeto.</h5>  
                    @endif
                    
                    <div class="divider"></div>
                </div>
            </div>
            

        </div>
    </div>
</div>

@stop