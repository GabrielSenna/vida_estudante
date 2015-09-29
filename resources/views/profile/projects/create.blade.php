@extends('profile.layouts.master')

@section('content')
	
<div class="container">
    <div class="row">
        <div class="col l12 m12 s12">
            <div class="card col l7 m8 s12">
                <div class="card-content ">
                    
                            <h4>Criando novo projeto</h4>
                            @include('errors._error-alert')
                    		<div class="row">
                    			<form action="{{ route('storeProject') }}" method="post" class="col l12 m12 s12" enctype="multipart/form-data">
                    			{!! csrf_field() !!}
                    			
                    			<div class="row">
                    				<p class="grey-text col l12 text-darken-2">O arquivo deve ser do tipo PDF</p>
	                    			<div class="file-field input-field col l9 m12 s12">
							      		
							      		<div class="btn yellow darken-2 btn-flat white-text">
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
                    			<div class="divider">
                    				
                    			</div>
                    			<div class="row">
	                    			<div class="input-field col l6 m12 s12">
	                    				<input type="text" name="title" id="title">
	                    				<label for="title">Título</label>
	                    				
	                    			</div>	
                    			
                    				<div class="input-field col l12 m12 s12">
	                    				<textarea name="description" id="description" class="materialize-textarea"></textarea>
	                    				<label for="description">Descrição</label>
	                    				
	                    			</div>
                                    <div class="input-field col l6 m12 s12">
                                        <input type="text" name="theme" id="theme">
                                        <label for="theme">Tema</label>
                                        
                                    </div> 
                                    <div class="input-field col l6 m12 s12">
                                        <input type="text" name="subject" id="subject">
                                        <label for="theme">Assunto</label>
                                        
                                    </div>  	
                                    <div class="row">
                                        <div class="col l12 m12 s12">
                                            <h5>Membros do projeto</h5>        
                                        </div>
                                    
                                    </div>
                                    <div class="input-field col l6 m12 s12">
                                        <label>Orientadores do projeto:</label>
                                        <br>
                                        <br>

                                        <select name="advisors[]" id="advisors" class="browser-default" style="height:100px" multiple>
                                            @foreach (Auth::user()->myFriends()->all() as $friend)
                                                <option value="{{ $friend->id }}">{{ $friend->name }}</option>
                                                
                                                
                                            @endforeach
                                            
                                        </select>
                                        <br>
                                        <button type="button" onclick="unmarkAdvisors()" class="btn btn-small grey">Desmarcar todos</button>
                                        <br>
                                        <br>
                                        <p class="grey-text text-darken-2">Para selecionar mais de um orientador, mantenha o Ctrl pressionado ao clicar.</p>
                                        
                                    </div>
                                    <div class="input-field col l6 m12 s12">
                                        <label>Alunos do projeto:</label>
                                        <br>
                                        <br>

                                        <select name="students[]" id="students" class="browser-default" style="height:100px" multiple>
                                            @foreach (Auth::user()->myFriends()->all() as $friend)
                                                <option value="{{ $friend->id }}">{{ $friend->name }}</option>
                                                
                                                
                                            @endforeach
                                            
                                        </select>
                                        <br>
                                        <button type="button" onclick="unmarkStudents()" class="btn btn-small grey">Desmarcar todos</button>
                                        <br>
                                        <small class="grey-text">Caso este projeto seja individual, não marque ninguém.</small>
                                        <br>
                                        <p class="grey-text text-darken-2">Para selecionar mais de um aluno, mantenha o Ctrl pressionado ao clicar.</p>
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