    @extends('extends')
    @section('content')

<div class="container-fluid bg-1">
    <div class="col-md-12" style="color:#000000;">
    	<div class="row">
            <form method="POST" action="/bookLCD" enctype="multipart/form-data">
              <div class="col-md-6 col-md-offset-3">
               {{ csrf_field() }}
               <h1>User information</h1>
               <p>Please check before book.</p>
               <hr>
               <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
            </div>
            <div class="form-group">
                <label for="name">Email:</label>
                <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email">
            </div>
            <div class="form-group">
                <label for="sel1">Take time:</label>
                <select class="form-control" name="take">
                    <option value="8:00 am">8:00 am</option>
                    <option value="9:00 am">9:00 am</option>
                    <option value="10:00 am">10:00 am</option>
                    <option value="11:00 am">11:00 am</option>
                    <option value="12:00 pm">12:00 pm</option>
                    <option value="1:00 pm">1:00 pm</option>
                    <option value="2:00 pm">2:00 pm</option>
                    <option value="3:00 pm">3:00 pm</option>  
                    <option value="4:00 pm">4:00 pm</option>
                    <option value="5:00 pm">5:00 pm</option>                                           
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Return time:</label>
                <select class="form-control" name="return">
                    <option value="9:00 am">9:00 am</option>
                    <option value="10:00 am">10:00 am</option>
                    <option value="11:00 am">11:00 am</option>
                    <option value="12:00 pm">12:00 pm</option>
                    <option value="1:00 pm">1:00 pm</option>
                    <option value="2:00 pm">2:00 pm</option>
                    <option value="3:00 pm">3:00 pm</option>  
                    <option value="4:00 pm">4:00 pm</option>
                    <option value="5:00 pm">5:00 pm</option> 
                    <option value="6:00 pm">6:00 pm</option>                                           
                </select>
            </div>
            <div class="form-group">
               <label for="sel1">Select Add on:</label>
               <select class="form-control" name="addon">
                 <option value="extension">Extension</option>
                 <option value="speaker">Speaker</option>
                 <option value="mic">Mic</option>
                 <option value="no">No Add on</option>
             </select>
         </div>
         <p></p>

         <h1>Select LCD</h1>
         <p>Tick only one</p>
         <hr>
         <table class="table table-bordered text-center">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Tick to book</th>
            </thead>
            <tbody>
             @foreach ($alls as $all)
             <tr>
                <td>{{ $all->id }}</td>
                <td>{{ $all->name }}</td>
                @if( $all->live == 1)
                <td><span class="label label-success">Available</span></td>
                @else
                <td><span class="label label-danger">Unavailable</span></td>
                @endif

                @if( $all->live == 1)
                <td><p><input type="checkbox" name="lcd" value="{{ $all->name }}"></p></td>
                @else
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    <p class="text-center"><button type="submit" class="btn btn-success btn-lg">Book</button></p>
</div>
</form>
</div>
</div>


@endsection