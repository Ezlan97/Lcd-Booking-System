    @extends('extends')
    @section('content')

    <div class="col-md-12" style="color:#000000;">
    	<div class="col-md-8 col-md-offset-2">
    		<h1 class="text-center">Booking list</h1>
    		<table class="table table-bordered">
    			<thead>
    				<th>Name</th>
    				<th>Email</th>
                    <th>Take time</th>
                    <th>Return time</th>
    				<th>Add on</th>
    				<th>LCD name</th>
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
    				</tr>
    				@endforeach
    			</tbody>
    		</table>

    	</div>
    </div>
    
    @endsection