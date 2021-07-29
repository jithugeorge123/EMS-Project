
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
            height: 1000px;
            width: 1000px;
        }
        div{
            top: 11%;
            left: 300px;
        }

    </style>
</head>
<body>
    <body class="container">
    <h1 style="margin-top:150px; margin-left:310px;">Add Reportees</h1>
    <div class="col-sm-4">
    <form action = "addemp" method="POST" class="form-group" >
    @csrf
    <label>Manager ID : {{session('user')}}</label>
    <input type="hidden" name="manager_id" value= "{{session('user')}}" placeholder="manager id" class="form-control"><br>
    <label>Employee ID</label>
    <input type="text" name="emp_id"  placeholder="1" class="form-control"  >
    <span class="text-danger">@error('emp_id'){{$message}}@enderror</span><br>
    <label>Enter Project ID</label>
    <input type="text" name="proj_id" placeholder="project id" class="form-control">
    <span class="text-danger">@error('proj_id'){{$message}}@enderror</span><br>

    <button type="submit" class="btn btn-primary" class="button">submit</button>
    <a href="/manager-records">Back To Profile</a>
</form>
</div>
</body>

</html>
