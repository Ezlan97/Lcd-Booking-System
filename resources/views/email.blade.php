	  @extends('extends')
	  @section('content')

<div class="container-fluid bg-1">
	  <div class="row">
	  	<div class="col-md-8 col-md-offset-2 text-center panel" style="color:#000000; margin-bottom:25px;">
	  		<h1>Notify user</h1>
	  		<a href="/list"><button class="btn btn-default">Back</button></a>
	  		<hr>
	  		<div class="col-md-6 col-md-offset-3">
	  			<form method="POST" action="/send" enctype="multipart/form-data">
	  				{{ csrf_field() }}
	  				<div class="form-group">
	  					<label for="name">Email:</label>
	  					<input type="text" class="form-control" name="email">
	  				</div>
	  				<div class="form-group">
	  					<label for="sel1">Subject:</label>
	  					<select class="form-control" name="head">
	  						<option value="Return LCD late">Return LCD late</option>
	  						<option value="late taking LCD">Late taking LCD</option>
	  						<option value="Cannot book on that time">Cannot book on that time</option>
	  					</select>
	  					</div>
	  				<div class="form-group">
	  					<label for="name">Message:</label>
	  					<textarea type="text" class="form-control"  name="test"></textarea>
	  				</div>
	  				<button type="submit" class="btn btn-primary">Send</button>
	  			</form>
	  		</div>
	  	</div>
	  </div>
</div>

	  @endsection