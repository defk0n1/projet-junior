<?php
$conn = mysqli_connect("localhost", "root", "", "catalogue");
if (!$conn) {
  die("no connection");
}
  
if (isset($_GET["id"])) {
    $user_id = $_GET["id"];
    $q = "DELETE FROM users WHERE id =" . $user_id;
    $result = $conn->query($q);
    
    if ($result) {
        echo '<script>alert("Data Deleted");</script>';
        header("location:index.php");
        exit; // Added to stop further execution after redirect
    } else {
        echo '<script>alert("Data not Deleted");</script>';
    }
} else {
    echo "No user ID provided.";
}
?>
