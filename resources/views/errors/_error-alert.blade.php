@if(count($errors))
	<div class="card">
		<div class="card-content red lighten-3 white-text">
			@foreach($errors->all() as $error)
			
					<p>{{ $error }}</p>
				
	    	@endforeach
    	</div>
	</div>
@endif