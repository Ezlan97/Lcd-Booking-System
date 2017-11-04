    @extends('extends')
    @section('content')

    <div class="container-fluid bg-1">
        <div class="row">
           <div class="col-md-6 col-md-offset-3 text-center panel well" style="color:#000000; margin-bottom:45px;">
            <div class="panel-head">
              <h1 style="font-weight: 700;">Update {{ $alls->name }}</h1>
              <a href="/update"><button class="btn btn-default">Back</button></a>
          </div>
          <hr>
          <div class="panel-body">
              <div class="col-md-4 col-md-offset-4">
                 <form method="POST" action="{{ route('NewUSER', $alls->id)}}" enctype="multipart/form-data">
                    {{ method_field('PATCH')}} {{ csrf_field() }}
                    <form class="form-inline" role="form">
                       <div class="form-group">
                       <input type="text" placeholder="Name" class="form-control" name="name">
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection