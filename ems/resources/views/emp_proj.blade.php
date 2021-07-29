<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Employee Project Details</title>
    <style>
        body{
            background-color:#696969;
            color:white;
        }
        .box{
            width:1125px;
        }
        .container table{
            padding:20px;
            border:5px;
            border-radius:10px;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-color:#DCDCDC;
            color:black;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="box">
            <h1>Employee Project Details</h1><hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Project Id</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Desc</th>
                        <th scope="col">Project Start Date</th>
                        <th scope="col">Project End Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$item->proj_id}}</th>
                        <td>{{$item->proj_name}}</td>
                        <td>{{$item->proj_desc}}</td>
                        <td>{{$item->proj_start_date}}</td>
                        <td>{{$item->proj_end_date}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <ul class="pager">
                <li class="previous"><a href={{"/employees_details  "}}>Back</a></li>    
            </ul>
        </div>
    </div>
</body>
</html>