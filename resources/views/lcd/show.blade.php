    @extends('extends')
    @section('content')

<div class="container-fluid bg-1">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2 well" style="color:#000000;" >
    		<h1 class="text-center" style="color:#0000000; font-weight: 700;">Your new LCD is saved to database</h1>
    		<div class="text-center">
    			<hr>
    			<h3>LCD id : {{ $lcds->id }}</h3>
    			<h3>LCD Name : {{ $lcds->name }}</h3>
                <h3>Created at : {{ $lcds->created_at }} </h3>
                <h3>Updated at : {{ $lcds->updated_at }} </h3>
                <a class="btn btn-default" role="button" href="/home">HOME</a>
            </div>
        </div>
    </div>
</div>

    @endsection