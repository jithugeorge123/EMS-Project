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
            background-color:	#696969;
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
            background-color:	#DCDCDC;
            
        }
    </style>
</head>
<body>
<div class="container">
        <form action="/update_log" method="POST">
            @csrf
            @method('POST')
            <h4 class="display-4 text-center">Update Log</h4><hr><br>
            <div class="form-group">
                <input type="hidden" class="form-control"  name="log_id" value="{{$data->log_id}}">
            </div>  
            <div class="form-group">
                <input type="hidden" class="form-control"  name="emp_id" value="{{$data->emp_id}}">
            </div>   
            <div class="form-group">
                <input type="hidden" class="form-control"  name="issue_title" value="{{$data->issue_title}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control"  name="issue_desc" value="{{$data->issue_desc}}">
            </div>
            <div class="form-group">
                <label>Issue Status</label>
                <input type="text" class="form-control"  name="issue_status" value="{{$data->issue_status}}">
            </div>           
            <button class="btn btn-primary" type="submit">Update Issue</button>         
        </form>
        <ul class="pager">
            <li class="previous"><a href={{"/log_issues"}}>Back</a></li>    
        </ul>
    </div>
</body>
</html>