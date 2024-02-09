<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $image = $_POST["image"];
    $brand = $_POST["brand"];
    $condition = $_POST["condition"];
    $mileage = $_POST["mileage"];
    $price = $_POST["price"];
    $conn = mysqli_connect("localhost", "root", "","motto"); 
    if (!$conn) {
        die("Connection error: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO moto (name, image, brand, `condition`, mileage, price)
        VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt, $sql)){
        die(mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "ssssid", $name, $image, $brand, $condition, $mileage, $price );
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
        <label for="brand">Product Brand</label>
        <select name="brand" id="brand">
            <option value="BMW">BMW</option>
            <option value="Harley-Davidson">Harley-Davidson</option>
            <option value="HONDA">HONDA</option>
            <option value="SUZUKI">SUZUKI</option>
            <option value="KAWASAKI">KAWASAKI</option>
            <option value="YAMAHA">YAMAHA</option>
        </select>
        <label for="condition">Condition</label>
        <select name="condition" id="condition">
            <option value="used">Used</option>
            <option value="New">New</option>
        </select>
        <label for="mileage">Product Mileage</label> <br>
        <input type="number" id="mileage" name="mileage" required>
        <label for="price">Product Price</label>
        <input type="number" step="0.01" id="price" name="price" required>
        <button type="submit">Send</button>
        
    </form>
    

    
</body>
</html>