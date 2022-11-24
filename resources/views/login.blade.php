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
        <form action="{{route('login_form')}}" method='POST'>
            @csrf
        <div class="row">
    <h2>sjdhfksdjk</h2>
        <div class='col-lg-3'>    
            <label>Email</label>
            <input type='email' name='email' required placeholder='email' class='form-control'/>
        </div>
        <div class='col-lg-3'>    
            <label>Password</label>
            <input type='password' name='password' required placeholder='password' class='form-control'/>
        </div>
        </div><br>
        <div class='col-lg-3'>    
            <input type='submit' value='submit' class='btn btn-success'/>
      
    </div>
  
</div>
</form>
</body>
</html>