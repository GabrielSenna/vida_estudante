@extends('profile.layouts.master')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card col l7 m8 s12">
                <div class="card-content ">
                    @if(count(Auth::user()->projectsFromStudent()))

                        <ul class="collapsible" data-collapsible="accordion">
                            @foreach (Auth::user()->projectsFromStudent as $project)
                                
                                <li >
                                    <div class="collapsible-header">
                                        
                                            <h5 class="blue-text text-darken-2"><strong>Projeto:</strong> {{ $project->title }}</h5>
                                              
                                        
                                        
                                            
                                        
                                    </div>
                                    <div class="collapsible-body">

                                        <h6 class="grey-text text-darken-1" style="margin-left:15px"><strong>Título:</strong> {{ $project->title }}</h6>         
                                            
                                        
                                        <h6 class="grey-text text-darken-1" style="margin-left:15px"><strong>Assunto:</strong> {{ $project->subject }}</h6>
                                        <h6 class="grey-text text-darken-1" style="margin-left:15px"><strong>Tema:</strong> {{ $project->theme }}</h6>
                                        <h6 class="grey-text text-darken-1" style="margin-left:15px"><strong>Descrição:</strong></h6>
                                        <h6 class="grey-text text-darken-1" style="margin-left:15px">{{ $project->description }}</h6>  
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