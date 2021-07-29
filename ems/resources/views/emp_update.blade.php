<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Employee Management</title>
    <style>
        .body,html{
            background-color: gray;
        }
        #up{
            top: 32%;
            left: 32%;
        }
        .container{
            background-color: lightgray;
        }
    </style>
</head>
<body class="container">
    <div class="col-sm-4" id="up">
<form action = "/edit/<?php echo $users[0]->emp_id; ?>" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table class="table table-striped table-dark">
<tr>
<td>Mobile Number</td>
<td>
<input type = 'text' name = 'emp_mobile_no'
value = '<?php echo $users[0]->emp_mobile_no; ?>'/>
</td>
</tr>
<tr>
<td>Communication Address</td>
<td>
<input type = 'text' name = 'emp_comm_address'
value = '<?php echo $users[0]->emp_comm_address; ?>'/>
</td>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Update Details" />
</td>
</tr>
</table>
</form>
<a href="/emp-records">Back To Profile</a>
</div>
</body>
</html>