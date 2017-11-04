    @extends('extends')
    @section('content')


    <div class="container-fluid bg-1 text-center">
        <img src="/image/image.jpg" style="height:150px;" alt="LCD">
        <span class="glyphicon glyphicon-projector"></span>  
        <h2 style="color:black; font-size:3em; font-weight:700;">Real Time Booking System.</h2>
    </div>

    <div class="container-fluid bg-2 text-center">    
    	<div class="row">
    		<div class="col-sm-4">
    			<span class="glyphicon glyphicon-heart-empty"></span> 
    			<p>Easy And Simple Interface To Use.</p>
    		</div>
    		<div class="col-sm-4"> 
    			<span class="glyphicon glyphicon-dashboard"></span>
    			<p>Fast And Time Saving System.</p>
    			
    		</div>
    		<div class="col-sm-4"> 
    			<span class="glyphicon glyphicon-thumbs-up"></span>
    			<p>Guarantee Real Time Availablity.</p>
    			
    		</div>
    	</div>
    </div>

    <div class="container-fluid bg-3">
        <div class="col-md-12" style="color:#000000;">
         <div class="row">
            <form method="POST" action="/test" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-6 col-md-offset-3 text-center">
                   <h1>Contact us</h1>
                   <p>Give use any feedback, comment and sugession.</p>

                   <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <textarea type="text" placeholder="Message" class="form-control"  name="message"></textarea>
                </div>

                <p class="text-center"><button type="submit" class="btn btn-success btn-lg">Submit</button></p>
            </div>
        </form>
    </div>
</div>

@endsection
