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
        }}
        body{
            background-color:#D3D3D3;
        }
        .container{
            min-height: 100vh;
            display:relative;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        .container form{
            width:500px;
            padding:20px;
            border-radius:10px;
            box-shadow:0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            background-color:	#00b3b3;

        }
        }
    </style>
    </head>
    <body>
    <div class="container" style="margin-top:50px">
    <h1 style="margin-top:140px; margin-left:310px; color:#800000">Create  Issue</h1>
    <div class="col-sm-6" style="margin-top:40px; margin-left:300px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
<form action="/insertRecord" method="POST" class="form-group">
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
<ul class="pager">
            <li class="previous"><a href={{"/display"}}>Back</a></li>
    </ul>
</div>
</div>
</body>
</html>
