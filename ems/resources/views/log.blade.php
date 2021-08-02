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
                <li class="active"><a href="#">Issues</a></li>
                <li><a href={{"reportees"}}>Reportees</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
    <div class="container">
        <div class="box">
            <h1 style="color: #800000;">Issues Of Reportees</h1><hr>
            <a href={{"logCreate/"}} class="btn btn-primary" style="background-color:#4DA8DA">Create Issue</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Log Id</th>
                        <th scope="col">Employee ID</th>
                        <th scope="col">Issue Type</th>
                        <th scope="col">Issue Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($logs as $dat)
                 <tr>
                    <td>{{$dat->log_id}}</td>
                    <td>{{$dat->emp_id}}</td>
                    <td>{{$dat->issue_title}}</td>
                     <td>{{$dat->issue_desc}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
