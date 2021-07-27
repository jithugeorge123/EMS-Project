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
   <h3 align="center">Employee Login</h3><br />

  @if($errors->any())
   @foreach($errors->all() as $err)
   <li> {{$err}} </li>
   @endforeach
   @endif
   <form action="forgotPass" method= "POST" >
   @csrf
    <div class="form-group">
     <label>Enter Employee Id</label>
     <input type="text" name="empId" class="form-control" >
    </div>
    <div class="form-group">
     <label>Enter New Password</label>
     <input type="password" name="password" class="form-control"> 
    </div>
    
    <div class="form-group">
     <button type="submit" class="btn btn-primary" >Check User</button>
    </div>
   </form>
   <!-- @if(@return_data==true)
   <form action="forgotPass" method= "POST" >
    @csrf
    <div class="form-group">
     <label>Enter New Password</label>
     <input type="password" name="password" class="form-control"> 
    </div>
    
    <div class="form-group">
     <button type="submit" class="btn btn-primary" >Check User</button>
    </div>
   </form>
   @endif -->

   
    
  </div>
 </body>