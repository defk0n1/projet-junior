<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $image = $_POST["image"];
    $condition = $_POST["condition"];
    $mileage = $_POST["mileage"];
    $price = $_POST["price"];
    $conn = mysqli_connect("localhost", "root", "","motto"); 
    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO moto (name, image, `condition`, mileage, price)
        VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "sssid", $name, $image, $condition, $mileage, $price );
    if (!mysqli_stmt_execute($stmt)) {
        die("Error executing statement: " . mysqli_stmt_error($stmt));
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    <h1>Insert Form</h1>
    <form method="post">
        <label for="name">Product name</label> <br>
        <input type="text" id="name" name="name" required>
        <label for="image">Product Image Link</label> <br>
        <input type="text" id="image" name="image">
        <label for="condition">Condition</label>
        <select name="condition" id="condition">
            <option value="0">Used</option>
            <option value="1">New</option>
        </select>
        <label for="mileage">Product Mileage</label> <br>
        <input type="number" id="mileage" name="mileage" required>
        <label for="price">Product Price</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <button type="submit">Send</button>
        
    </form>
    

    
</body>
</html>