<!--
 * File Name => LogCreate
 * Author    => Pallavi Shinde
 * Purpose   => File will create issue.
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
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Welcome {{session('user_name')}}</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="manager-records">Home</a></li>
                <li ><a href={{"display"}}>Issues</a></li>
                <li ><a href={{"reportees"}}>Reportees</a></li>
                <li class="active"><a href="#">Create Issue</a></li>
                <li><a href={{"addEmployee"}}>Add Reportees</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href='/logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
    <h1 style="margin-top:140px; margin-left:310px;">Create  Issue</h1>
    <div class="col-sm-6" style="margin-top:40px; margin-left:300px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
<form action="insertRecord" method="POST" class="form-group">
    @csrf
    <label>Employee ID: {{session('user')}}</label>
    <input  type="hidden" name="emp_id" value ="{{session('user')}}" placeholder="id" class="form-control" ><br>
    <label>Issue Title</label>
    <input type="text" name="issue_title" placeholder="Laptop" class="form-control"><br>
    <span class="text-danger">@error('issue_title'){{$message}}@enderror</span><br>
    <label>Issue Description</label>
    <input type="text" name="issue_desc" placeholder="Not able to login" class="form-control"><br>
    <span class="text-danger">@error('issue_desc'){{$message}}@enderror</span><br>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
</body>
</html>
