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
<body class="container">
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
</body>
</html>
