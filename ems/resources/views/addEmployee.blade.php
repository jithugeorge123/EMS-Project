<!--
 * File Name => addEmployee
 * Author    => Pallavi Shinde
 * Purpose   => File will add employees.
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
            background-color:#D3D3D3;
            color: white;
        }
        .container form{
            width:500px;
            padding:20px;
            border-radius:10px;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-color:	#00b3b3;

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
                <li ><a href="reportees">Reportees</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
    <h1 style="margin-top:170px; margin-left:310px; color:#800000;">Add Reportees</h1>
    <div class="col-sm-6" style="margin-top:40px; margin-left:300px;">
    <form action = "/addemp" method="POST" class="form-group" >
    @csrf
    <label>Manager ID : {{session('user')}}</label>
    <input type="hidden" name="manager_id" value= "{{session('user')}}" placeholder="manager id" class="form-control"><br>
    <label>Employee ID</label>
    <input type="text" name="emp_id"  placeholder="1" class="form-control"  >
    <span class="text-danger">@error('emp_id'){{$message}}@enderror</span><br>
    <label>Project ID</label>
    <input type="text" name="proj_id" placeholder="project id" class="form-control">
    <span class="text-danger">@error('proj_id'){{$message}}@enderror</span><br>
    <button type="submit" class="btn btn-primary" class="button">Submit</button>
</form>
<ul class="pager">
    <li class="previous"><a href={{"/reportees"}}>Back</a></li>
</ul>
</div>
</div>
</body>

</html>
