@extends('extends')

@section('content')

<div class="container-fluid bg-1">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 well" style="color:#000000;">
      <h1 class="text-center">Select one LCD to book</h1><p class="text-center"><a href="/home"><button class="btn btn-default">Back</button></a></p>
      <hr>
      <table class="table table-bordered text-center">
       <thead>
         <th>#</th>
         <th>Name</th>
         <th>Choose</th>
       </thead>
       <tbody>
        @foreach ($alls as $all)
        <tr>
          @if( $all->live == 0)
          @else
          <td>{{ $all->id }}</td>
          <td>{{ $all->name }}</td>
          <td><a class="btn btn-success" href="{{ route('editLCD', $all->id ) }}">Book</td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection