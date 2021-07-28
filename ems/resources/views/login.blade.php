
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

   <!-- @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif -->

   <form action="{{ url('/user') }}" method= "POST" >
   <!-- {{ csrf_field() }} -->
   @csrf
    <div class="form-group">
     <label>Enter Username</label>
     <input type="text" name="user" class="form-control" >
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password" class="form-control">
    </div>
    <span style= "color:red">@error('user'){{$message}}@enderror</span>
    <div class="form-group">
     <button type="submit" class="btn btn-primary" >Login</button>
    </div>
    <span style= "color:red">@error('password'){{$message}}@enderror</span>
   </form>
   <a class="btn" href="{{ url('/register') }}">Register Here</a>
   <a class="btn" href='/forgotPass'>Forgot Password ?</a>
  </div>
 </body>
