<!--
 * File Name => search
 * Author    => Surya Baba Javvadi
 * Purpose   => File will show details of employee by searching his id or name  by the admin.
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
    <title>Search</title>
    <style>
        @media only screen and (max-width: 120px){
            body{
        
            }
        }
        body{
            background-color: #D3D3D3;
        }
        .container{
            min-height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        .container form{
            width:500px;
            padding:20px;
            border-radius:10px;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-color:  #00b3b3;
            
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
                <li><a href={{"employees_details"}}>Employee Details</a></li>
                <li><a href={{"projects"}}>Project Details</a></li>
                <li><a href={{"log_issues"}}>Log Issues</a></li>
                <li class="active"><a href="#">Search<span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: 50px;">
        <h3 style="color: #800000;">Search By Employee Id Or Employee First Name</h3>
        <hr>
        <form action="/searchbyidname" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label>Employee Or Employee First Name</label>
                <input type="text" class="form-control" name="emp_id_name" placeholder="Enter a Employee Id or employee first name">
            </div>
            <button class="btn btn-primary" type="submit">Search By Id</button>
        </form>
    </div>
</body>
</html>