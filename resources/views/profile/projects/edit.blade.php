@extends('profile.layouts.master')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card col l7 m8 s12">
                <div class="card-content ">
                    <h4>Editando projeto</h4>
                    @include('errors._error-alert')
            		<div class="row">
            			<form action="{{ route('updateProject', ['id'=>$project->id]) }}" method="post" class="col l12 m12 s12" enctype="multipart/form-data">
            			{!! csrf_field() !!}
            			
                			<div class="row">
                				<p class="grey-text col l12 text-darken-2">O arquivo deve ser do tipo PDF</p>
                    			<div class="file-field input-field col l9 m12 s12">
    					      		<div class="btn yellow waves-effect darken-2 btn-flat white-text">
    					        		<span class="left">Arquivo</span>
    					        		<i class="material-icons right">picture_as_pdf</i>
    					        		<input type="file" name="project_file" id="project_file">
    					      		</div>
    					      		<div class="file-path-wrapper">
    					        		<input class="file-path validate" type="text" id="file_path" name="file_path">
    					      		</div>
    					      		<br>

    					    	</div>
                			</div>
                			
                			<div class="row">
                				<div class="col l5 m12 s12">
                					<button type="submit" class="btn blue darken-2">Enviar</button>		
                				</div>
                			</div>
            		    </form>
            	    </div>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function unmarkAdvisors(){
        $('#advisors option').prop('selected',false);
    }
    function unmarkStudents(){
        $('#students option').prop('selected',false);
    }
</script>
@stop