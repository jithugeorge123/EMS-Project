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
            left: 16%;
        }
    </style>
</head>
<body class="container">
    <center>
<h3 style="margin-top:150px; margin-left:1px;">Reportees</h3>
</center>
<div class="col-sm-8">
<table class="table table-striped table-dark">
<tr>
<td>ID</td>
<td>First Name</td>
<td>Last Name</td>
<td>Mobile No</td>
<td>DOB</td>
<td>Gender</td>
<td>Address</td>
<td>City</td>
<td>Delete</td>
</tr>
@foreach ($data as $emp)
<tr>
<td>{{ $emp->emp_id }}</td>
<td>{{ $emp->emp_first_name }}</td>
<td>{{ $emp->emp_last_name }}</td>
<td>{{ $emp->emp_mobile_no }}</td>
<td>{{ $emp->emp_dob }}</td>
<td>{{ $emp->emp_gender }}</td>
<td>{{ $emp->emp_comm_address }}</td>
<td>{{ $emp->emp_city}}</td>
<td><a href ={{"delete/".$emp->emp_id}}>Delete</a></td>
</tr>
@endforeach
</table>
<a href="/manager-records">Back To Profile</a>
</div>

</body>
</html>
