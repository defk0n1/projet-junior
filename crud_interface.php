<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Admin Interface</title>
</head>
<body>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .login-link {
        position: fixed;
        top: 5px; /* Adjust top position as needed */
        right: 30px; /* Adjust right position as needed */
        font-size: 24px; /* Adjust font size as needed */
        color: #333; /* Adjust color as needed */
        z-index: 9999; /* Ensure it appears on top of other elements */
        text-decoration: none; /* Remove default underline */
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 35px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: red;
            color: #fff;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: red;
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            background-color: black;
        }
    </style>
    <a href="login.php" class="login-link">
        <i class="bx bx-power-off"></i>
    </a>
    <div class="container">
        <h2>Admin Interface</h2>
        <?php
            // Connect to the database (replace with your database credentials)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "moto";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            function fetchRecords() {
                global $conn;
                $sql = "SELECT * FROM moto";
                $result = $conn->query($sql);

                $records = array();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $records[] = $row;
                    }
                }

                return $records;
            }

            $records = fetchRecords();
        ?>
        <div id="records-container">
            <?php if (empty($records)): ?>
                <p>No records available.</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>brand</th>
                        <th>Name</th>
                        <th>image</th>
                        <th>motocondition</th>
                        <th>milage</th>
                        <th>price</th>

                    </tr>
                    <?php foreach ($records as $record): ?>
                        <tr>
                            <td><?= $record['id']; ?></td>
                            <td><?= $record['brand']; ?></td>
                            <td><?= $record['name']; ?></td>
                            <td><?= $record['image']; ?></td>
                            <td><?= $record['motocondition']; ?></td>
                            <td><?= $record['milage']; ?></td>
                            <td><?= $record['price']; ?></td>
                            <td>
                                <a href="update.php?id=<?= $record['id']; ?>">Update</a>
                                <a href="delete.php?id=<?= $record['id']; ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
        <a href="add.php">Add Record</a>
    </div>
</body>
</html>
