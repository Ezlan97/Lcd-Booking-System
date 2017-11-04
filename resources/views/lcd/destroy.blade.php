    @extends('extends')
    @section('content')

<div class="container-fluid">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 text-center" style="color:#000000;">
    		<h1>Create new LCD</h1>
    		<hr>
    		<div class="col-md-4 col-md-offset-4">
    			<form method="POST" action="/destroy" enctype="multipart/form-data">
    				{{ csrf_field() }}
    				<form class="form-inline" role="form">
    					<div class="form-group">
    						<label for="name">LCD code number:</label>
    						<input type="text" class="form-control" name="name">
    					</div>
    					<button type="submit" class="btn btn-success">ADD</button>
    				</form>
    			</form>
    		</div>
    	</div>
    </div>
</div>

    @endsection