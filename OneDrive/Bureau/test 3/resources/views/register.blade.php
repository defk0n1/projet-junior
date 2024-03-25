<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Register</title>


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
        .register{
    width : 500px;
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

.register .input-email input i {
    position: absolute;
    right:20px;
    top:50%;
    transform:translate(-50%);
    font-size: 20px;
}
.register .btn {
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
    </style>
    </head>
    <body>
        <div class='register' >
            <h1>REGISTER</h1>
            <form action="/register" method="POST">
                @csrf
                <div class ='input-name'>
                    <label for="name"><i class='bx bxs-user'></i></label>
                    <input type="text" id ='name' placeholder="name" name="name"  >
                  
                </div>
                <div class ='input-email'>
                    <label for="email"><i class='bx bxs-envelope' ></i></label>
                    <input type="email" id ='email' placeholder="email" name="email" >
             
                </div>
                <div class='input-password'>
                    <label for="password" ><i class='bx bxs-lock-alt'></i></label>
                    <input type="password" id='password' placeholder="password" name='password'> 
                  
                </div>
               
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    
    
</body>
</html>