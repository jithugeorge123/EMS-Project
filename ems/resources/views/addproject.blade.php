<!--
 * File Name => addproject
 * Author    => Surya Baba Javvadi
 * Purpose   => File will Add New Project by the admin.
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
    <title>Insert Project Details</title>
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
        <form action="/addproject" method="POST">
            @csrf
            @method('POST')
            <h4 class="display-4 text-center">Add New Project Details</h4><hr><br>
            <div class="form-group">
                <label>Project Name</label>
                <input type="text" class="form-control"  name="proj_name" placeholder="Enter the project name">
                <span class="text-danger">@error('proj_name'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label>Project Desc</label>
                <input type="text" class="form-control"  name="proj_desc" placeholder="Enter the project description">
                <span class="text-danger">@error('proj_desc'){{$message}}@enderror</span>
            </div>   
            <div class="form-group">
                <label>Project Start Date</label>
                <input type="text" class="form-control"  name="proj_start_date" placeholder="yyyy-mm-dd">
                <span class="text-danger">@error('proj_start_date'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label>Project End Date</label>
                <input type="text" class="form-control"  name="proj_end_date" placeholder="yyyy-mm-dd">
                <span class="text-danger">@error('proj_end_date'){{$message}}@enderror</span>
            </div>           
            <button class="btn btn-primary" type="submit">Add</button>         
        </form>
        <ul class="pager">
            <li class="previous"><a href={{"/projects"}}>Back</a></li>    
        </ul>
    </div>
    
</body>
</html>