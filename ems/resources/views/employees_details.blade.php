<!--
 * File Name => employees_details
 * Author    => Surya Baba Javvadi
 * Purpose   => File will show details of employees to the admin and perform some specific actions.
 *-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Employees Details</title>
    <style>
        @media only screen and (max-width: 120px){
            body{
        
            }
        }
        body{
            background-color: #D3D3D3;
            color:white;
        }
        .box{
            width:1125px;
        }
        .container table{
            padding:20px;
            border:5px;
            border-radius:10px;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-color:  #00b3b3;
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
                <li><a href={{"admin"}}>Home</a></li>
                <li class="active"><a href="#">Employee Details</a></li>
                <li><a href={{"projects"}}>Project Details</a></li>
                <li><a href={{"log_issues"}}>Log Issues</a></li>
                <li><a href={{"search"}}>Search<span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container" style="margin-top:50px">
    <div class="box">
        <h1 style="color: #800000;">Employee Details</h1><hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Type</th>
                        <th scop="col">Password</th>
            
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee['emp_id']}}</th>
                        <td><a href={{"emp_proj/".$employee['emp_id']}} style="color:black;">{{$employee['emp_first_name']." ".$employee['emp_last_name']}}</a></td>
                        <td>{{$employee['emp_mobile_no']}}</td>
                        <td>{{$employee['emp_dob']}}</td>
                        <td>{{$employee['emp_gender']}}</td>
                        <td>{{$employee['emp_comm_address']}}</td>
                        <td>{{$employee['emp_city']}}</td>
                        <td>{{$employee['emp_type']}}</td>
                        <td>{{$employee['emp_password']}}</td>
                        <td>
                            <a href={{"updateemployee/".$employee['emp_id']}} class="btn btn-success">Update</a>
                            <a href={{"delete_emp/".$employee['emp_id']}} class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>