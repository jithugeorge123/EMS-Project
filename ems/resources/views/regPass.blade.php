<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #333;  
}  
.container {  
    margin:  0 auto;
    max-width: 540px;
    padding: 20px 80px 20px 60px;  
    background-color: lightgrey;  
}  

input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
} 

.registerbtn2 {  
  background-color: #4F84F8;  
  color: white;  
  padding: 10px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  max-width: 80px;  
  opacity: 0.9;
  position: relative;
  top:20px;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);  
}  
.registerbtn2:hover {  
  opacity: 1;  
} 
.pager{
  margin: 0;
  position: relative;
  top:-10%;
  left: 98%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>  
</head>  
<body>  
  <div class="container">  
  <center>  <h1> Employee Registeration Details</h1> </center>  
  <hr>  
  <label> Employee Id: {{$emp['emp_id']}}  </label><br><br> 
  <label> Name : {{$emp['emp_first_name']}} {{$emp['emp_last_name']}} </label> <br>  <br> 
<label>   
Phone :  {{$emp['emp_mobile_no']}} <br> <br> 
</label>  
<label>   
Date of Birth :  {{$emp['emp_dob']}} <br> <br> 
</label>
 
<label>   
Gender :  {{$emp['emp_gender']}} <br> <br> 
</label>
Communication Address :  {{$emp['emp_comm_address']}}<br> <br> 
<label>
City :  {{$emp['emp_city']}}<br> <br> 
</label>   
</div>
<!-- <button class="pager" >
                <li class="previous"><a href='login'>Login</a></li>    
        </ul> -->

<button class="registerbtn2" onclick="window.location.href='login';" >Back to Login </button> 


  
    

</body>  
</html> 