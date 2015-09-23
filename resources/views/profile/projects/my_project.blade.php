@extends('profile.layouts.master')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card col l7 m8 s12">
                <div class="card-content ">
                    
                    @forelse (Auth::user()->projectsFromStudent() as $project)
                    	<h5>{{$project->title}}</h5>
                    @empty
                    	<h5>Você não possui um projeto.</h5>
                    	<p>Deseja criar um projeto?</p>
                    	<br>
                    	<a href="{{ route('createProject') }}" class="btn">Criar novo projeto</a>
                        <br>
                        <br>	
                    @endforelse
                    <div class="divider"></div>
                </div>
            </div>
            

        </div>
    </div>
</div>

@stop