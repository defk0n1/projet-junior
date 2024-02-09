<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Product</title>
</head>
<body>
    <?php
    // Connect to the database 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "moto";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to fetch moto by ID
    function fetchProductById($id) {
        global $conn;
        $sql = "SELECT * FROM moto WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    // Function to update moto details
    function updateProduct($id, $name, $brand, $motocondition, $image, $milage, $price) {
        global $conn;
        $sql = "UPDATE moto SET name='$name', brand='$brand', motocondition='$motocondition', image='$image', milage='$milage', price='$price' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $brand = $_POST["brand"];
        $motocondition = $_POST["motocondition"];
        $image = $_POST["image"];
        $milage = $_POST["milage"];
        $price = $_POST["price"];

        updateProduct($id, $name, $brand, $motocondition, $image, $milage, $price);
    }

    // Check if the product ID is provided in the URL
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $product = fetchProductById($id);

        if ($product) {
            ?>
            <div class="container">
                <h2>Update Product</h2>
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?= $product['id']; ?>" readonly>

                    <label for="name">Product Name:</label>
                    <input type="text" name="name" value="<?= $product['name']; ?>" required>

                    <label for="brand">Brand:</label>
                    <select name="brand">
                        <option value="bmw" <?= ($product['brand'] == 'bmw') ? 'selected' : ''; ?>>BMW</option>
                        <option value="yamaha" <?= ($product['brand'] == 'yamaha') ? 'selected' : ''; ?>>Yamaha</option>
                        <option value="suzuki" <?= ($product['brand'] == 'suzuki') ? 'selected' : ''; ?>>Suzuki</option>
                        <option value="honda" <?= ($product['brand'] == 'honda') ? 'selected' : ''; ?>>Honda</option>
                        <option value="harley" <?= ($product['brand'] == 'harley') ? 'selected' : ''; ?>>Harley</option>
                        <option value="kawasaki" <?= ($product['brand'] == 'kawasaki') ? 'selected' : ''; ?>>Kawasaki</option>
                    </select>

                    <label for="motocondition">motocondition:</label>
                    <select name="motocondition">
                        <option value="new" <?= ($product['motocondition'] == 'new') ? 'selected' : ''; ?>>New</option>
                        <option value="used" <?= ($product['motocondition'] == 'used') ? 'selected' : ''; ?>>Used</option>
                    </select>

                    <label for="image">Image URL:</label>
                    <input type="text" name="image" value="<?= $product['image']; ?>" required>

                    <label for="milage">Milage:</label>
                    <input type="text" name="milage" value="<?= $product['milage']; ?>" required>

                    <label for="price">Price:</label>
                    <input type="text" name="price" value="<?= $product['price']; ?>" required>

                    <button type="submit">Update Product</button>
                    
                </form>
                <a href="crud_interface.php">
                        <button>return</button>
                    </a>
            </div>
            <?php
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Product ID not provided.";
    }
    ?>
</body>
</html>
