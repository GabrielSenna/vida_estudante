@extends('profile.layouts.master')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col l12 m12 s12">
	            <div class="card col l7 m12 s12">
	                <div class="card-content ">
	                	<h5>Avaliar projeto</h5>
	                	@include('errors._error-alert')
	                	<form action="{{ route('rateSubmit', ['id'=>$project->id]) }}" method="post" accept-charset="utf-8">
	                		{!! csrf_field() !!}
	                		<div class="row">
	                			<div class="input-field col l12 m12 s12">
	                				<input type="text" name="grade" id="grade" maxlength="2" style="width:40px">
	                				<label for="grade">Nota</label>
	                			</div>
	                			<div class="input-field col l12 m12 s12">
	                    			<textarea name="comment" id="comment" class="materialize-textarea"></textarea>
	                    			<label for="comment">Comentários</label>
	                    		</div>
	                    		<div class="row">
	                    			<div class="col l12 m12 s12">
	                    				<strong>Aprovado?</strong>
	                    			</div>
	                    			<div class="input-field col l12 m12 s12" style="margin-top:6px; margin-bottom:15px;">
	                    				<div class="switch">
										    <label>
										    	Não
										    	<input type="checkbox" name="approved" id="approved">
										    	<span class="lever"></span>
										    	Sim
										    </label>
										</div>
	                    			</div>
	                    		</div>
	                    		<div class="row">
	                    			<br>
	                    			<div class="input-field col l6 m6 s6">
	                    				<button type="submit" class="btn">Avaliar</button>
	                    			</div>
	                    		</div>
	                    	</div>
	                	</form>
	                	@foreach($project->ratings as $rating)
	                		@if($rating->advisor->id == Auth::user()->id)
	                		<div class="divider">
	                			
	                		</div>
	                		<br>
	                			<h6 style="font-weight:600;">Sua última avaliação:</h6>
                                <span style="font-weight:500">Nota: <span class="{{ ($rating->grade >= 6) ? 'green-text' : 'red-text' }}">{{ $rating->grade }}</span></span>
                                <br>
                                <span style="font-weight:500;">{{ $rating->getApproved() }}{!! ($rating->approved = 1) ? '<i class="material-icons green-text">check</i>' : '<i class="material-icons red-text">close/i>' !!}</span>
                                <div class="card z-depth-0 blue lighten-4">
                                	<div class="card-content">
                                    	Comentário:
                                        <div class="card z-depth-0">
                                        	<div class="card-content">
                                            	<span class="grey-text text-darken-1">{{ $rating->comment }}</span>
                                            </div>
                                        </div>
                                        <span class="right grey-text text-darken-1"><small>{{ $rating->updated_at->diffForHumans() }}</small></span>
                                        <br>
                                    </div>
                                </div>
                                <div class="divider">
                                                        
                                </div>
	                		@endif
	                	@endforeach
	                </div>
	            </div>
		    </div>
	    </div>
	</div>
@stop