<?php

$conn = mysqli_connect("localhost", "root", "", "catalogue");
if (!$conn) {
  die("no connection");
}

if (isset($_GET["id"])) {
  $user_id = $_GET["id"];
  $query = "SELECT * FROM users WHERE id = " . $user_id;
  $result = $conn->query($query);
  $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <style>
    td;
    th {
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">User Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./index.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./create.php">Create User</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="main-body">
      <div class="card mb-3">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">First Name</h6>
            </div>
            <div class="col-sm-9 text-secondary"><?php echo $user["products-name"] ?></div>
          </div>
          <hr />
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Last Name</h6>
            </div>
            <div class="col-sm-9 text-secondary"><?php echo $user["image"] ?></div>
          </div>
          <hr />
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Position</h6>
            </div>
            <div class="col-sm-9 text-secondary"><?php echo $user["mileage"] ?></div>
          </div>
          <hr />
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0"></h6>
            </div>
            <div class="col-sm-9 text-secondary">
              <?php echo $user["gender"] == "1" ? "Male" : "Female" ?>
            </div>
          </div>
          <hr />
          <hr />
          <div class="row">
            <div class="col-sm-3">
              <a class="btn btn-info" href="./update.php">Edit</a>
            </div>
            <div class="col-sm-3">
              <a class="btn btn-danger" href="./delete.php">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="my-5 mx-3"></div>
</body>

</html>