<html>
 <head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Change Password</h3><br />

   <form action="editPass" method= "POST" >
   @csrf
    <div class="form-group">
    <label>   
        Employee Name : {{$dbEmp['emp_first_name']}} {{$dbEmp['emp_last_name']}}
    </label><br>
    <input type="hidden" name="empId" value= "{{$dbEmp['emp_id']}}">
     <label>Enter New Password</label>
     <input type="password" name="password" class="form-control"> 
    </div>
   
    <div class="form-group">
     <button type="submit" class="btn btn-primary" >Change Password</button>
    </div>
   </form>

   </div>
 </body>