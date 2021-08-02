<!--
 * File Name => updateemployees
 * Author    => Surya Baba Javvadi
 * Purpose   => File will update details of particualr employee by the admin.
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
    <title>Update Employee Details</title>
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
        <form action="/updateemployee" method="POST">
            @csrf
            @method('POST')
            <h4 class="display-4 text-center">Update Employee Details</h4><hr>
            <div class="form-group">
                <input type="hidden" class="form-control" name="emp_id" value="{{$data->emp_id}}">
            </div>
            <div class="form-group">
                <label>Employee First Name</label>
                <input type="text" class="form-control" name="emp_first_name" value="{{$data->emp_first_name}}">
            </div>
            <div class="form-group">
                <label>Employee Last Name</label>
                <input type="text" class="form-control" name="emp_last_name" value="{{$data->emp_last_name}}">
            </div>
            <div class="form-group">
                <label>Employee Mobile Number</label>
                <input type="text" class="form-control" name="emp_mobile_no" value="{{$data->emp_mobile_no}}">
            </div>
            <div class="form-group">
                <label>Employee Date Of Birth</label>
                <input type="text" class="form-control" name="emp_dob" value="{{$data->emp_dob}}">
            </div>
            <div class="form-group">
                <label>Employee Gender</label>
                <input type="text" class="form-control" name="emp_gender" value="{{$data->emp_gender}}">
            </div>
            <div class="form-group">
                <label>Employee Communication Address</label>
                <input type="text" class="form-control" name="emp_comm_address" value="{{$data->emp_comm_address}}">
            </div>
            <div class="form-group">
                <label>Employee City</label>
                <input type="text" class="form-control" name="emp_city" value="{{$data->emp_city}}">
            </div>
            <div class="form-group">
                <label>Employee Type</label>
                <input type="text" class="form-control" name="emp_type" value="{{$data->emp_type}}">
            </div>
            <div class="form-group">
                <label>Employee Password</label>
                <input type="text" class="form-control" name="emp_password" value="{{$data->emp_password}}">
            </div>                 
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
        <ul class="pager">
            <li class="previous"><a href={{"/employees_details"}}>Back</a></li>    
        </ul>
    </div>
</body>
</html>