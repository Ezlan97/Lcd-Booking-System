    @extends('extends')
    @section('content')


     @if(Auth::guest())
    <div class="container-fluid bg-1">
    <div class="col-md-12" style="color:#000000;">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-danger">
                <div class="panel-heading"><h1 class="text-center">Ops!</h1></div>
                <div class="panel-body text">
                <p class="text-center">To place a book please register or login</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    @else
    <div class="container-fluid bg-1">
    <div class="col-md-12" style="color:#000000;">
    	<div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
                <div class="panel-heading"><h1 class="text-center">Term of use</h1></div>
                <div class="panel-body text">
                    <p>1.Book 30 minute before take time</p>
                    <p>2.First come first serve</p>
                    <p>3.Return on time</p>
                    <p>4.Any damage will be a penalty to user</p>
                    <p>5.No booking for 1 hour earlier or a day earlier</p>
                    <p>6.This lcd system is real time booking system you can only book when it available</p>
                    <p>7.Any rules broke by user will be given penalty by email</p>
                    <p class="bg-primary text-center"><strong>Continue means user agree to the term of use</strong></p>
                </div>
            </div>
        </div>
    </div>
 <p class="text-center"><a href="/myLCD"><button class="btn btn-primary btn-lg">Continue</button></a></p>
</div>
    @endif
    @endsection