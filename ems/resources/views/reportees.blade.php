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
            background-color:#D3D3D3;
            color:black;
        }
        .box{
            width:1125px;
        }
        .container table{
            padding:20px;
            border:5px;
            border-radius:10px;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-color:#00b3b3;
            color:black;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome {{session('user_name')}}</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="manager-records">Home</a></li>
                <li ><a href="display">Issues</a></li>
                <li class="active"><a href="#">Reportees</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
<div class="container">
        <div class="box">
            <h1 style="color:#800000;">Reportees</h1><hr>
            <a href={{"addEmployee/"}} class="btn btn-primary" style="background-color:#4DA8DA">Add Reportees</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $emp)
                    <tr>
                    <td>{{ $emp->emp_id }}</td>
                    <td>{{ $emp->emp_first_name }}</td>
                    <td>{{ $emp->emp_last_name }}</td>
                    <td>{{ $emp->emp_mobile_no }}</td>
                    <td>{{ $emp->emp_dob }}</td>
                    <td>{{ $emp->emp_gender }}</td>
                    <td>{{ $emp->emp_comm_address }}</td>
                    <td>{{ $emp->emp_city}}</td>
                    <td><a class="btn btn-primary" href ={{"delete/".$emp->emp_id}}>Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
