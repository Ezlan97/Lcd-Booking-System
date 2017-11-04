    @extends('extends')
    @section('content')

    <div class="container-fluid bg-1">
      <div class="row">
       <div class="col-md-8 col-md-offset-2 well" style="color:#000000;">
        <h1 class="text-center" style="font-weight: 700;">User Feedback</h1>
        <p class="text-center"><a href="/home"><button class="btn btn-default">Back</button></a></p>
        <hr>
        <table class="table table-bordered text-center well">
         <thead>
           <th>#</th>
           <th>Name</th>
           <th>Email</th>
           <th>Comment</th>
           <th>Created At</th>
           <th>Action</th>
         </thead>
         <tbody>
          @foreach ($lists as $all)
          <tr>
            <td>{{ $all->id }}</td>
            <td>{{ $all->name }}</td>
            <td>{{ $all->email }}</td>
            <td>{{ $all->message }}</td>
            <td>{{ $all->created_at }}</td>
            <td><a href="{{ route('DeleteF', $all->id ) }}" class="btn btn-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>



@endsection