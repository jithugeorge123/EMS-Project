<!--
 * File Name => emp_edit_view
 * Author    => Pallavi Shinde
 * Purpose   => This is home screen of Employee.
 *-->
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
        @media only screen and (max-width: 200px){
        body{
        background-color: blue;
        }
        }
        body{
            background-color:#696969;
        }


    </style>
</head>
<!--body part -->
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome {{session('user_name')}}</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href={{"insertIssue"}}>Create Issue</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="container" style="margin-top:50px">
<h2 style="font-size: 40px; color:white;">Welcome  {{session('user_name')}}</h2>
<div style="color: #101010;" class="data">
@foreach ($users as $user)
<h2 style="color:white;">ID  : <span style="color: #800000;">{{ $user->emp_id }}</span></h2>
<h2 style="color:white;">Mobile No  : <span style="color: #800000;">{{ $user->emp_mobile_no }}</span></h2>
<h2 style="color:white;">Date Of Birth  : <span style="color: #800000;">{{ $user->emp_dob }}</span></h2>
<h2 style="color:white;">Genger  : <span style="color: #800000;">{{ $user->emp_gender }}</span></h2>
<h2 style="color:white;">Address  : <span style="color: #800000;">{{ $user->emp_comm_address }}</span></h2>
<h2 style="color:white;">City   : <span style="color: #800000;">{{ $user->emp_city }}</span></h2>
<h2 style="color:white;">Password   : <span style="color: #800000;">{{ $user->emp_password }}</span></h2>
<h2 style="color:white;">Edit <a style="color: #800000;" href = 'edit/{{$user->emp_id }}' class="glyphicon glyphicon-edit"></a></h2>
@endforeach
</div>
</div>
</body>
</html>
