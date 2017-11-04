    @extends('extends')
    @section('content')

    <div class="container-fluid bg-1">
        <div class="col-md-12">
           <div class="text-center col-md-10 col-md-offset-1 well" style="color:#000000;">
              <h1 style="font-weight: 700;">Booking list</h1>
              <div class="col-md-6 col-md-offset-3">


              <form action="/search" method="POST">
                   {{ csrf_field() }}
                   <input id="search" name="search" type="text" class="form-control" placeholder="Search">
               </form>

           </div>
           <a href="/home"><button class="btn btn-default">Back</button></a>
           <hr>
           <table class="table table-bordered well">
             <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Take time</th>
                <th>Return time</th>
                <th>Add on</th>
                <th>LCD name</th>
                <th></th>
                <th>Delete</th>
                <th>Notify</th>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                   <td>{{ $book->name }}</td>
                   <td>{{ $book->email }}</td>
                   <td>{{ $book->take }}</td>
                   <td>{{ $book->return }}</td>
                   <td>{{ $book->addon }}</td>
                   <td>{{ $book->lcd }}</td>
                   @if( $book->live == 0)
                   <td><a href="/live" class="btn btn-default">Return LCD</td>
                   @else
                   <td>User have Returned LCD</td>
                   @endif
                   <td><a href="{{ route('DeleteBook', $book->id ) }}" class="btn btn-danger">Delete</a></td>
                   <td><a href="/notify" class="btn btn-primary">Notify</a></td>
               </tr>
               @endforeach
           </tbody>
       </table>

   </div>
</div>
</div>

@endsection