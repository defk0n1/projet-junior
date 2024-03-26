<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing:border-box;
            font-family:"Poppins",sans-serif;
        }
        body{
            display:flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url("https://i.pinimg.com/736x/2d/e7/be/2de7be1319faef590ed15a753e655aa3.jpg");
            background-size:cover;
            background-position: center;
        }
        .register{
            width : 420px;
            height: auto;
            background:transparent;
            color: rgb(255, 240, 252);
            border-radius: 12px;
            padding: 30px 40px;
            border: 2px solid rgba(255, 255, 255, .2);
        }
        .register h1{
            font-size: 36px;
            text-align:center;
        }
        .register .input-name,
        .register .input-password ,
        .register .input-email {
            width: 100%;
            height: 100px;
            margin-bottom:1px;
        }
        .register .input-name input,
        .register .input-password input,.register .input-email input {
            width:90%;
            height: 40%;
            background: transparent;
            border: none;
            outline:none;
            border:2px solid rgba(255, 255, 255, .2);
            border-radius: 60px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }
        .input-email input i,
        .input-email input i {
            position: absolute;
            right:20px;
            top:50%;
            transform:translate(-50%);
            font-size: 20px;
        }
        
        
        
       
    </style>

</head>
<body>
    <div class='register'>
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <div class ='input-name'>
                <label for="name"></label>
                <input type="text" id ='name' placeholder="name" name="name" value="{{ old('name') }}">
                <i class='bx bx-user'></i>
            </div>
            <div class='input-password'>
                <label for="password" ></label>
                <input type="password" id='password' placeholder="password" name='password'> 
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class ='input-email'>
                <label for="email"></label>
                <input type="email" id ='email' placeholder="email" name="email" value="{{ old('email') }}">
                <i class='bx bx-user'></i>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>