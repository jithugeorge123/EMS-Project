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
    <div style="margin-top:90px; margin-left:10px; color:white; " class="col-sm-4">
    <ul >
    <li><span class="glyphicon glyphicon-info-sign"></span><a style=" font-weight: bold; list-style-type: none;font-size: 25px;" href="display">Issues</a></li><br>
    <li><a  href="reportees">Reportees</a></li><br>
    <li><a  href="logCreate">Create Issue</a></li><br>
    <li><a  href="addEmployee">Add Reportees</a><br></li><br>
    <li><button  class="btn btn-primary" onclick="window.location.href='/manager-records'">logout</button></li>
    </ul>
    </div>
    <div class="line" class="col-sm-2"></div>
<div class="col-sm-4" style=" margin-top:50px; margin-left:10px;" >
<h2 style="font-size: 40px; color:#404040">Welcome  to Manager Screen</h2>
<div style="color: #101010;" class="data">
@foreach ($users as $user)
<h2>ID  : <span style="color: #F8F8FF;">{{ $user->emp_id }}</span></h2>
<h2>First Name : <span style="color: #F8F8FF;">{{ $user->emp_first_name }}</span></h2>
<h2>Last Name : <span style="color: #F8F8FF;">{{ $user->emp_last_name }}</span></h2>
<h2>Mobile No  : <span style="color: #F8F8FF;">{{ $user->emp_mobile_no }}</span></h2>
<h2>Date Of Birth  : <span style="color: #F8F8FF;">{{ $user->emp_dob }}</span></h2>
<h2>Genger  : <span style="color: #F8F8FF;">{{ $user->emp_gender }}</span></h2>
<h2>Address  : <span style="color: #Ebf6f7;">{{ $user->emp_comm_address }}</span></h2>
<h2>City   : <span style="color: #Ebf6f7;">{{ $user->emp_city }}</span></h2>
<h2>Username  : <span style="color: #Ebf6f7;">{{ $user->emp_user_name }}</span></h2>
<h2>Password   : <span style="color: #Ebf6f7;">{{ $user->emp_password }}</span></h2>
<h2>Edit <a style="color: #Ebf6f7;" href = 'update/{{$user->emp_id }}' class="glyphicon glyphicon-edit"></a></h2>
@endforeach
</div>
</div>
</body>
</html>
