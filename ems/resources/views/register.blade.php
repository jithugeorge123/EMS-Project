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
</style>  
</head>  
<body>  
<form method="POST" action= "register">  
@csrf
  <div class="container">  
  <center>  <h1> Employee Registeration Form</h1> </center>  
  <hr>  
  <label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />    
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required />   
<div>
<label>   
Phone :  
</label>  
<input type="text" name="phone_number" placeholder="Phone Number"  value="+91" size="12"/>    

<label>   
Date of Birth :  
</label>
<input name="dob" type="date"><br>
<label>   

<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
  


<!-- <input type="text" name="phone" placeholder="phone no." size="10"/ required>    -->
Communication Address :  
<textarea cols="80" rows="5" name="comm_add" placeholder="Current Address" value="address" required>  
</textarea>  
City :  
</label>   
  
<select name="city">  
<option value="Bangalore">Bangalore</option>  
<option value="Pune">Pune</option>  
<option value="Hyderbad">Hyderbad</option>  
<option value="Chennai">Chennai</option>  
<option value="Delhi">Delhi</option>  
<option value="Kochi">Kochi</option>  

</select>  
</label>
</div>  
<div> 
 


  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" required>  
    <button type="submit" class="registerbtn">Register</button>    
</form>  

<button class="registerbtn" onclick="window.location.href='login';" >login </button> 
</body>  
</html> 