<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "moto";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to select all rows from the products table
$sql = "SELECT brand, name, image, motocondition, milage, price FROM moto";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Fetch values of each column and store them in separate variables
        $brand = $row['brand'];
        $name = $row['name'];
        $image = $row['image'];
        $motocondition = $row['motocondition'];
        $milage = $row['milage'];
        $price = $row['price'];

        // Now you can use these variables as needed
        echo "Brand: " . $brand . "<br>";
        echo "Name: " . $name . "<br>";
        echo "Image: " . $image . "<br>";
        echo "Condition: " . $motocondition . "<br>";
        echo "Mileage: " . $milage . "<br>";
        echo "Price: " . $price . "<br>";
        echo "<br>";
    }
} else {
    echo "No results found";
}
mysqli_data_seek($result, 0);
while ($row = mysqli_fetch_assoc($result)) {
    // Fetch values of each column and store them in separate variables
    $brand = $row['brand'];
    $name = $row['name'];
    $image = $row['image'];
    $motocondition = $row['motocondition'];
    $milage = $row['milage'];
    $price = $row['price'];

    // Now you can use these variables as needed
    echo "Brand: " . $brand . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Image: " . $image . "<br>";
    echo "Condition: " . $motocondition . "<br>";
    echo "Mileage: " . $milage . "<br>";
    echo "Price: " . $price . "<br>";
    echo "<br>";
}

// Close the database connection
mysqli_close($conn);
?>