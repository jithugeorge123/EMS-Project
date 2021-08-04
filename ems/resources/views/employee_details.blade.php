<!--
 * File Name => employee_details
 * Author    => Surya Baba Javvadi
 * Purpose   => File will show details of employee in the tabular format to the admin.
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
    <title>Employee Details</title>
    <style>
        body{
            background-color: #D3D3D3;
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
            background-color:  #00b3b3;
            color:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1 style="color: #800000;">Employee Details</h1><hr>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Type</th>
                        <th scop="col">Password</th>
            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$data['emp_id']}}</th>
                        <td>{{$data['emp_first_name']}}</td>
                        <td>{{$data['emp_last_name']}}</td>
                        <td>{{$data['emp_mobile_no']}}</td>
                        <td>{{$data['emp_dob']}}</td>
                        <td>{{$data['emp_gender']}}</td>
                        <td>{{$data['emp_comm_address']}}</td>
                        <td>{{$data['emp_city']}}</td>
                        <td>{{$data['emp_type']}}</td>
                        <td>{{$data['emp_password']}}</td>
                    </tr>
                </tbody>
            </table>
            <ul class="pager">
                <li class="previous"><a href={{"/admin"}}>Back</a></li>    
            </ul>
        </div>
    </div>
</body>
</html>