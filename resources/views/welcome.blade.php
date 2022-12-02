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
        <div class="row">
        <div class='col-lg-3'>    
    <button type='button' class=" btn btn-primary"onclick="window.location='{{route('registrationForm'); }}'">Registration</button>
    </div>
    <div class='col-lg-3'>    
    <button type='button' class='btn btn-info' onclick="window.location='{{route('login'); }}'">Login</button>
    </div>
    </div>
</div>
</body>
</html>