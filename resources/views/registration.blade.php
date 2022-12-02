<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body><br>
    <div class='container'>
        <form action="{{route('regd_data')}}" method='POST'>
            @csrf
        <div class="row">
        <div class='col-lg-3'>    
            <label>Username</label>
            <input type='text' name='username'required placeholder='username' class='form-control'/>
        </div>
        <div class='col-lg-3'>    
            <label>Email</label>
            <input type='email' name='email' required placeholder='email' class='form-control'/>
        </div>
        </div>
        <div class='row'>
        <div class='col-lg-3'>    
            <label>Select Role</label>
            <select class='form-control' name='role_id' required>
                <option value='1'>Admin</option>
                <option value='2'>User</option>

            </select>
        </div>
        <div class='col-lg-3'>    
            <label>Password</label>
            <input type='password'required name='password' placeholder='password' class='form-control'/>
        </div>
        </div><br>
        <div class='col-lg-3'>    
            <input type='submit' value='submit' class='btn btn-success'/>
      
    </div>
    <div class='col-lg-3'>    
<button type='button' class='btn btn-primary' onclick="window.location='{{url('/'); }}'">Back</button>      
    </div>
</div>
</form>
@if ($message = Session::get('message'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif
</body>
</html>