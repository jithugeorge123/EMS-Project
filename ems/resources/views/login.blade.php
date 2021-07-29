
 <head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  
   .box{
    padding:10px;   
    width:600px;
    margin:100px auto;
    border:2px solid;
    border-color: blue;
    background-color: lightgrey;

   }

   body{  
     font-family: Calibri, Helvetica, sans-serif;  
     background-color: #333;  
}





  </style>
 </head>
 <body>
  <br />
  
  <div class="container box">
   <h3 align="center">Employee Login</h3><br />
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">
        {{ session()->get('fail') }}
    </div>
    @endif


   <form action="{{ url('/user') }}" method= "POST" >
   <!-- {{ csrf_field() }} -->
   @csrf
    <div class="form-group">
     <label>Enter Employee Id</label>
     <input type="text" name="user" class="form-control" placeholder="Employee ID" >
     <span style= "color:red">@error('user'){{$message}}@enderror</span>
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control" placeholder="Password">
     <span style= "color:red">@error('password'){{$message}}@enderror</span>
    </div>
    
    <div class="form-group">
     <button type="submit" class="btn btn-primary" >Login</button>
    </div>
    @if(session('message'))
        <span style= "color:red"> {{session('message')}} </span>
    @endif
   </form>
   <a class="btn" href="{{ url('/register') }}">Register Here</a>
   <a class="btn" href='/forgotPass'>Forgot Password ?</a>
  </div>
 </body>
