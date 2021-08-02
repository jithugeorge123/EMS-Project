<html>
 <head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   @media screen and (max-width: 600px) {
    .box{
    padding:10px;   
    max-width:400px;
    margin:100px auto;
    border:2px solid;
    border-color: blue;
    background-color: lightgrey;

   }
}
   .box{
    padding:10px;   
    width:600px;
    margin:100px auto;
    border:2px solid;
    /* border-color: blue; */
    /* background-color:  #80dfff; */
    background-color:  #00cccc; 

   }

   body{  
     font-family: Calibri, Helvetica, sans-serif;  
     /* background-color: #333;   */
     background-color: #DCDCDC;
     /* background-color:  #00b3b3; */
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
     <label>New Password: </label>
     <input type="password" name="password" class="form-control"> 
    </div>
    <label>Re-type Password: </label>
     <input type="password" name="password" class="form-control"> 
     <br>
    
   
    <div class="form-group">
     <button type="submit" class="btn btn-primary" >Change Password</button>
    </div>
   </form>

   </div>
 </body>
