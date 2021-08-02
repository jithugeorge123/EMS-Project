<!--
 * File Name => Manager.blade
 * Author    => Pallavi Shinde
 * Purpose   => This is home screen of Manager.
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
            background-color: 	#B0B0B0;
        }
        a:visited {
        color: white;
        }
        ul li a:visited {
        color: white;
        }
        a:hover {
        color: red;
        }

        ul {
        list-style-type: none;
        font-weight: bold;
        font-size: 19px;
        }
        ul li a{
        list-style-type: none;
        font-weight: bold;
        font-size: 25px;
        }
        data  h2 span{
            font-size: 50px;
            color: black;
        }
        .container { position: relative; }

        .line {
        border-left: 4px solid black;
        height: 100%;
        position: absolute;
        left: 20%;
        margin-left: -3px;
        top: 0;
        }
.button{
    top: 500px;
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
                <li><a href={{"display"}}>Issues</a></li>
                <li><a href={{"reportees"}}>Reportees</a></li>
                <li><a href={{"logCreate"}}>Create Issue</a></li>
                <li><a href={{"addEmployee"}}>Add Reportees</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
<div class="container" style="margin-top:50px">
<h2 style="font-size: 40px; color:#404040">Welcome {{session('user_name')}}</h2>
@foreach ($users as $user)
<h2>ID  : <span style="color: #800000;">{{ $user->emp_id }}</span></h2>
<h2>First Name : <span style="color: #800000;">{{ $user->emp_first_name }}</span></h2>
<h2>Last Name : <span style="color: #800000;">{{ $user->emp_last_name }}</span></h2>
<h2>Mobile No  : <span style="color: #800000;">{{ $user->emp_mobile_no }}</span></h2>
<h2>Date Of Birth  : <span style="color: #800000;">{{ $user->emp_dob }}</span></h2>
<h2>Genger  : <span style="color: #800000;">{{ $user->emp_gender }}</span></h2>
<h2>Address  : <span style="color: #800000;">{{ $user->emp_comm_address }}</span></h2>
<h2>City   : <span style="color: #800000;">{{ $user->emp_city }}</span></h2>
<h2>Password   : <span style="color: #800000;">{{ $user->emp_password }}</span></h2>
<h2>Edit <a style="color: #800000;" href = 'update/{{$user->emp_id }}' class="glyphicon glyphicon-edit"></a></h2>
@endforeach
</div>
</body>
</html>
