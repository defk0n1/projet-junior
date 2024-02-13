<?php
$conn = mysqli_connect("localhost", "root", "", "moto");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET["id"])) {
    $user_id = $_GET["id"];
    $q = "DELETE FROM moto WHERE id =" . $user_id;
    $result = $conn->query($q);

    if ($result) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:crud_interface.php");
        exit; // Added to stop further execution after redirect
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
} else {
    echo "No user ID provided.";
}
?>