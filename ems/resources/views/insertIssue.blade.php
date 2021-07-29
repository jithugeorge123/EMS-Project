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
        .body,html{
            background-color: gray;
        }
        .container{
            background-color: lightgray;
            width: 1000px;
            height: 1000px;
        }

        div{
            top: 11%;
            left: 260px;
        }
        .set{
            top: 70%;
            left: 700px;
        }
    </style>
    </head>
    <body class="container">
    <h1 style="margin-top:150px; margin-left:270px;">Create  Issue</h1>
    <div class="col-lg-5">
    <form action="insertIssue" method="POST" class="form-group">
    @csrf
    <label>Employee ID</label>
    <input type="text" name="emp_id" placeholder="id" class="form-control" ><br>
    <label>Enter Issue Title</label>
    <input type="text" name="issue_title" placeholder="Laptop" class="form-control"><br>
    <label>Enter Issue Description</label>
    <input type="text" name="issue_desc" placeholder="Not able to login" class="form-control"><br>
    <button type="submit" class="btn btn-primary">submit</button>
    <a href="/emp-records">Back To Profile</a>
</form>
</div>
</body>
</html>
