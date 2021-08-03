<!--
 * File Name => create_log
 * Author    => Surya Baba Javvadi
 * Purpose   => File will used to create admin's own logs.
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
    <title>Create Logs</title>
    <style>
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
<div class="container">
        <form action="/create_log" method="POST">
            @csrf
            @method('POST')
            <h4 class="display-4 text-center">Create New Log</h4><hr><br>
            <div class="form-group">
                <label>Employee Id : {{session('user')}}</label>
                <input type="hidden" class="form-control" value="{{session('user')}}"  name="emp_id" placeholder="Enter the employee Id">
            </div>   
            <div class="form-group">
                <label>Issue Title</label>
                <input type="text" class="form-control"  name="issue_title" placeholder="Enter Issue Title">
                <span class="text-danger">@error('issue_title'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label>Issue Description</label>
                <input type="text" class="form-control"  name="issue_desc" placeholder="Enter issue Description">
                <span class="text-danger">@error('issue_desc'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label>Issue Status</label>
                <input type="text" class="form-control"  name="issue_status" placeholder="Enter issue Status">
                <span class="text-danger">@error('issue_status'){{$message}}@enderror</span>
            </div>           
            <button class="btn btn-primary" type="submit">Add</button>         
        </form>
        <ul class="pager">
            <li class="previous"><a href={{"/log_issues"}}>Back</a></li>    
        </ul>
    </div>
</body>
</html>