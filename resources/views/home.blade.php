<html>
    <head>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/bootstrap.rtl.css">
      <link rel="stylesheet" href="css/bootstrap-grid.css">
      <link rel="stylesheet" href="css/bootstrap-grid.rtl.css">
      <link rel="stylesheet" href="css/bootstrap-reboot.css">
      <link rel="stylesheet" href="css/bootstrap-reboot.rtl.css">
      <link rel="stylesheet" href="css/bootstrap-utilities.css">
    </head>
    <body><center>
        <dev class="container">
            <dev class="row">
                <dev class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                    <h2>Login Form</h2>
                    
                    
                    <form action="process" method="post">
                    @csrf
                       <input type="text" class="form-control" name="name" id="name" @empty(old('name')) placeholder="Enter Name" @endempty value="{{old('name')}}">
                       <span style="color:red">@error('name') {{$message}}@enderror</span>
                       <br>
                       <br>
                       <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                       <span style="color:red">@error('password') {{$message}} @enderror </span>
                       <br>
                       <br>
                       <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                </dev>
            </dev>
        </dev>
        </center>
    </body>
</html>