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
        .body,html{
            background-color: gray;
        }
        .container{
            background-color: lightgray;
        }
        div{
            top: 10%;
            left: 25%;
        }

    </style>
    </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome {{session('emp_first_name')}}</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="manager-records">Home</a></li>
                <li class="active"><a href="#">Issues</a></li>
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
    <h2  style="margin-top:150px; margin-left:300px;">Issues of Reportees</h2>
    <div class="col-sm-6">
  <table class="table table-striped table-dark">
    <tr>
        <td>Log ID</td>
        <td>Employee ID</td>
        <td>Issue Type</td>
        <td>Issue Description</td>
    </tr>
    @foreach ($logs as $dat)
    <tr>
        <td>{{$dat->log_id}}</td>
        <td>{{$dat->emp_id}}</td>
        <td>{{$dat->issue_title}}</td>
        <td>{{$dat->issue_desc}}</td>
    </tr>
    @endforeach
</table>
<a href="/manager-records">Back To Profile</a>
</div>
</div>
</body>
</html>
