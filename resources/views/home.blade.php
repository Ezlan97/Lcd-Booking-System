@extends('extends')

@section('content')

@if(Auth::user()->level>0)

<div class="container-fluid bg-1 text-center">
 <span class="glyphicon glyphicon-user"></span> 
    <h4 style="color:black; font-size:4em;">Welcome {{ Auth::user()->name }}</h4>
</div>

<div class="container-fluid bg-2">
    <div class="col-md-12" style="color:#ffffff;">
        <div class="row">
            <div class="col-md-3">
                <h1 class="text-center">View Book list</h1>
                <hr>
                <p class="text-center">Show all the book list</p>
                <a class="btn btn-primary btn-block" role="button" href="/list">VIEW</a>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">User Feedback</h1>
                <hr>
                <p class="text-center">User comment and suggession</p>
                <a class="btn btn-primary btn-block" role="button" href="/fList">CHECK</a>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">Add LCD</h1>
                <hr>
                <p class="text-center">Create a new LCD</p>
                <a class="btn btn-primary btn-block" role="button" href="lcd/create">ADD</a>
            </div>
            <div class="col-md-3">
                <h1 class="text-center">Delete LCD</h1>
                <hr>
                <p class="text-center">Deleting LCD</p>
                <a class="btn btn-primary btn-block" href="/delete">DELETE</a>
                <p></p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">update LCD</h1>
                <hr>
                <p class="text-center">for updating LCD</p>
                <a class="btn btn-primary btn-block" href="/update">UPDATE</a>
                <p></p>
            </div>
        </div>
    </div>
</div>

@else

<div class="container-fluid bg-1">
    <div class="col-md-12" style="color:#000000;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"><h1 class="text-center">Welcome {{ Auth::user()->name }}</h1></div>
                <div class="panel-body text">
                    <h4 class="text-center">Now you can book LCD</h4>
                    <a class="btn btn-primary" role="button" href="{{ route('UpdateUSER', Auth::id() ) }}">Update status</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
@endsection
