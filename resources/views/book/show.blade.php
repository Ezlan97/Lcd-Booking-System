    @extends('extends')
    @section('content')

<div class="container-fluid bg-1">
    <div class="col-md-12" style="color:#000000;">
    <div class="col-md-8 col-md-offset-2 well">
    <div class="text-center">
    	<h1 style="font-weight: 700;">Booking success</h1>
    	<hr>
    	<table class="table table-bordered">
    		<thead>
    			<th>Name</th>
    			<th>Email</th>
                <th>Take time</th>
                <th>Return time</th>
    			<th>Add on</th>
    			<th>LCD number</th>
    		</thead>
    		<tbody>
    			<tr>
    				<td>{{ $forms->name }}</td>
    				<td>{{ $forms->email }}</td>
                    <td>{{ $forms->take }}</td>
                    <td>{{ $forms->return }}</td>
    				<td>{{ $forms->addon }}</td>
    				<td>{{ $forms->lcd }}</td>
    			</tr>
    		</tbody>
    	</table>
    </div>    	
    </div>   	
    </div>

        <div class="col-md-12" style="color:#000000;">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-danger">
                <div class="panel-heading"><h1 class="text-center">Reminder</h1></div>
                <div class="panel-body text">
                    <p>1.Book 30 minute before take time</p>
                    <p>2.First come first serve</p>
                    <p>3.Return on time</p>
                    <p>4.Any damage will be a penalty to user</p>
                    <p>5.No booking for 1 hour earlier or a day earlier</p>
                    <p>6.Any rules broke by user will be given penalty by email</p>
                </div>
            </div>
        </div>
    </div>
</div>


    @endsection