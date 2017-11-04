@extends('extends')

@section('content')

<div class="container-fluid bg-1">
  <div class="row">
    <div class="col-md-6 col-md-offset-3 well" style="color:#000000;">
      <h1 class="text-center">Returned LCD</h1><p class="text-center"><a href="/list"><button class="btn btn-default">Back</button></a></p>
      <hr>
      <table class="table table-bordered text-center well">
       <thead>
         <th>#</th>
         <th>Name</th>
         <th>Status</th>
       </thead>
       <tbody>
        @foreach ($alls as $all)
        <tr>
          <td>{{ $all->id }}</td>
          <td>{{ $all->name }}</td>
          @if( $all->live == 0)
          <td><form action="{{ route('setLive', $all->id)}}" method="post" enctype="multipart/form-data">{{ method_field('PATCH')}} {{ csrf_field() }} <button class="btn btn-danger" type="submit" name="live" value="1">Not Returned</button></form></td>
          @else
          <td><form action="{{ route('setLive', $all->id)}}" method="post" enctype="multipart/form-data">{{ method_field('PATCH')}} {{ csrf_field() }}
            <button class="btn btn-success" type="submit" name="live" value="0">Returned</button></form></td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

  @endsection