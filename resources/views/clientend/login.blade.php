<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet"> 


</head>
<body>
    <!-- partial:index.partial.html -->
    <div id="bg"></div>

    <form action="{{url('signin')}}" method="POST">
        @csrf
        <h1>Welcome To Admin Login</h1>

        <div class="form-field">
            <input type="email" name="loginemail" placeholder="Email" required/>
        </div>
        
        <div class="form-field">
            <input type="password" name="loginpassword" placeholder="Password" required/> 
            </div>
        
        <div class="form-field">
            <button class="btn" type="submit">Log in</button>
        </div>
    </form>
    <!-- partial -->
    
</body>
</html>
