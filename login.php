<?php
$conn = mysqli_connect("localhost", "root", "", "moto");
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
  header("Location: crud_interface.php");
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
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style> <?php include 'loginstyle.css'; ?> </style>
</head>
<body>
    <a href="home.php" class="home-link">
        <i class='bx bxs-home'></i>
    </a>
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