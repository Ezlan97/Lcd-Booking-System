    @extends('extends')
    @section('content')

    <div class="container-fluid bg-1">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 well" style="color:#000000;">
          <h1 class="text-center" style="font-weight: 700;">Current LCD status</h1>
          <hr>
          <table class="table table-bordered text-center">
           <thead>
             <th>Name</th>
             <th>Status</th>
           </thead>
           <tbody>
            @foreach ($alls as $all)
            <tr>
              <td>{{ $all->name }}</td>
              @if( $all->live == 1)
              <td><span class="label label-success">Available</span></td>
              @else
              <td><span class="label label-danger">Unavailable</span></td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection