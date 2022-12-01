

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
<a href="{{route('login')}}">Logout</a>
<h2>{{Session::get('name')}}</h2>
    <div class='container'>
        <form action="{{route('save_data')}}" method='POST'>
            <h2>Add Title</h2>
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
            <label>Number</label>
            <input type='number' name='number' required placeholder='email' class='form-control'/>
        </div>
        <div class='col-lg-3'>    
            <label>dscription</label>
            <textarea class='form-control'  name='desc'></textarea>
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
