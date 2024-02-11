<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");
if (!$conn) {
  die("no connection");
}
if(isset($_POST['submit'])){

$email = $_POST['mail'];
$password = $_POST['pass'];
$query = "select * from `user` where `username`='$email' and `password`='$password'";
$result = $conn->query($query);
$row = $result -> fetch_assoc();
$count= mysqli_num_rows($result);
if($count==1){
  header("Location: success.php");
}
else{
  echo '<script>
       window.location.href ="login.php";
       alert("Login failed. Invalid username or password.") 
       </script>';
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style> <?php include 'loginstyle.css'; ?> </style>
</head>
<body>

    <div class="wrapper">
        <form method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="mail" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="pass" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
        </form>
    </div>

</body>
</html>