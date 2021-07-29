<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        #down{
            top: 10%;
            left: 30%;
        }
        #class{
            top: 10%;
        }
        .body,html{
            background-image: url("asserts/images/back.jpg");
            background-color: gray;
        }
        .container{
            background-color: lightgray;
        }
        span{
            font-size: 30px;
        }
    </style>
</head>
<body class="container">
    <center>
    <h1>Welcome {{session('user_name')}}</h1>
    </center>
<p><span class="glyphicon glyphicon-user"></p>Profile</span>
<div id="up">
<table class="table table-striped table-dark" >
<tr>
<td>ID</td>
<td>First Name</td>
<td>Lastst Name</td>
<td>Mobile No</td>
<td>Emp DOB</td>
<td>Gender</td>
<td>Address</td>
<td>City</td>
<td>Password</td>
<td>Update</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->emp_id }}</td>
<td>{{ $user->emp_first_name }}</td>
<td>{{ $user->emp_last_name }}</td>
<td>{{ $user->emp_mobile_no }}</td>
<td>{{ $user->emp_dob }}</td>
<td>{{ $user->emp_gender }}</td>
<td>{{ $user->emp_comm_address }}</td>
<td>{{ $user->emp_city}}</td>
<td>{{ $user->emp_password}}</td>
<td><a href = 'edit/{{ $user->emp_id }}'>Edit</a></td>
</tr>
@endforeach
</table>
</div>

<div id="down" class="col-sm-4">
<h3 text-align:center><b> ENTER LOG ISSUES </b></h3>
<form action="insert" method="POST" class="form-group">
    @csrf
    <label>Employee ID : {{ $user->emp_id }}</label>
    <input type="hidden" name="emp_id" placeholder="1" value= "{{$user->emp_id}}" class="form-control"><br>
    <label>Enter Issue Title</label>
    <input type="text" name="issue_title" placeholder="Laptop" class="form-control"><br>
    <label>Enter Issue Description</label>
    <input type="text" name="issue_desc" placeholder="Not able to login" class="form-control"><br>
    <button type="submit">submit</button>
</form>
</div>
<a href='/logout'>Logout</a>
</body>
</html>
