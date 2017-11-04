@extends('extends')

@section('content')

    <div class="container-fluid bg-1">
      <div class="row">
       <div class="col-md-8 col-md-offset-2 well" style="color:#000000;">
        <h1 class="text-center" style="font-weight: 700;">Update LCD</h1>
        <p class="text-center"><a href="/home"><button class="btn btn-default">Back</button></a></p>
        <hr>
        <table class="table table-bordered text-center well">
         <thead>
           <th>#</th>
           <th>Name</th>
           <th>Created At</th>
           <th>Delete</th>
         </thead>
         <tbody>
          @foreach ($alls as $all)
          <tr>
            <td>{{ $all->id }}</td>
            <td>{{ $all->name }}</td>
            <td>{{ $all->created_at }}</td>
            <td><a href="{{ route('UpdateLCD', $all->id ) }}" class="btn btn-primary">Update</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection