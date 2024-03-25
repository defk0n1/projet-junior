<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url("https://i.pinimg.com/736x/2d/e7/be/2de7be1319faef590ed15a753e655aa3.jpg");
            background-size: cover;
            background-position: center;
        }
        .login {
            width: 420px;
            height: auto;
            background: transparent;
            color: rgb(255, 240, 252);
            border-radius: 12px;
            padding: 30px 40px;
            border: 2px solid rgba(255, 255, 255, .2);
        }
        .login h1 {
            font-size: 36px;
            text-align: center;
        }
        .login .input-name,
        .login .input-password {
            width: 100%;
            height: 100px;
            margin-bottom: 1px;
        }
        .login .input-name input,
        .login .input-password input {
            width: 90%;
            height: 40%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 60px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }
        .input-password input i,
        .input-name input i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translate(-50%);
            font-size: 20px;
        }
        .login .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0px 15px;
        }
        .remember-forgot label input {
            accent-color: #fff;
            margin-right: 3px;
        }
        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        .login .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
        .login .registe-low {
            font-size: 14.5px;
            text-align: center;
            margin-top: 20px;
            margin: 20px 0 15px;
        }
        .login .registe-low a {
            color: #fff;
            text-decoration: none;
        }
        
        
    </style>
</head>
<body>
    <div class='login'>
   
    <h1>LOGIN</h1>
    <form action="/login" method='POST'>
        @csrf
        <div class ='input-name'>
            <label for="name"><i class='bx bxs-user'></i></label>
            <input type="text" id ='name' placeholder="username" name='loginname'>
           
        </div>
        <div class='input-password'>
            <label for="password"><i class='bx bxs-lock-alt'></i></label>
            <input type="password" id='password' placeholder="password" name='loginpassword'> 
        </div>
        <div class="remember-forgot">
           <label ><input type="checkbox">REMEMBER ME</label> 
           <a href="#">Forgot Password</a>
        </div>
        <button type="submit" class="btn">LOGIN
    
        </button>
        <div class="registe-low">
            <p>Don't have an account? <a href="{{route('register')}}" >Register</a></p>
        </div>
     
      
    
    </div>
</form>
</body>
</html>
