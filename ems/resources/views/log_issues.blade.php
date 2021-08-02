<!--
 * File Name => log_issues
 * Author    => Surya Baba Javvadi
 * Purpose   => File will show details of log issues by the each and every employee to the admin and perform some specific actions.
 *-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Issues</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                <li><a href={{"employees_details"}}>Employee Details</a></li>
                <li><a href={{"projects"}}>Project Details</a></li>
                <li class="active"><a href="#">Log Issues</a></li>
                <li><a href={{"search"}}>Search<span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
        <div class="box">
            <h1 style="color: #800000;">Log Issues</h1><hr>

            <a href={{"create_log"}} class="btn btn-primary" style="background-color:#4DA8DA">Create Your Log</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Employee Id</th>
                        <th scope="col">Issue Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$item['log_id']}}</th>
                        <td>{{$item['emp_id']}}</td>
                        <td>{{$item['issue_title']}}</td>
                        <td>{{$item['issue_desc']}}</td>
                        <td>{{$item['issue_status']}}</td>
                        <td>
                            <a href={{"update_log/".$item['log_id']}} class="btn btn-success">Update Issue</a>
                        </td>
                    </tr>
                    @endforeach    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>