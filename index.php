<?php
$conn = mysqli_connect("localhost", "root", "", "catalogue");
if (!$conn) {
  die("no connection");
}
// echo "success";

$query = "SELECT * FROM users";

$result = $conn->query($query);

$users = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($users);

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
    td,
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
            <a class="nav-link active" aria-current="page" href="./index.php">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./create.php">Create User</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <div class="my-5 mx-3">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">id</th>
          <th scope="col">name </th>
          <th scope="col">image</th>
          <th scope="col">condition</th>
          <th scope="col">mileage</th>
          <th scope="col">price</th>
          <th scope="col">brand</th>
          <th></th>
        
        </tr>
        <?php foreach($users as $user) { ?>
          <tr>
            <th scope="row"><?php echo $user["id"] ?></th>

            <td>
              <a class="text-reset" href="<?php echo "./profile.php?id=" . $user["id"] ?>">
                <?php echo $user["name"] ?>
              </a>
            </td>

            <td><a class="text-reset" href="<?php echo "./profile.php?id=" . $user["id"] ?>">
                <?php echo $user["image"] ?>
              </a></td>

            <td><?php echo $user["mileage"] ?></td>

          <td><?php echo $user["condition"] ?></td>
          <td><?php echo $user["mileage"] ?></td>
          <td><?php echo $user["price"] ?></td>




        <td>
              <a href="<?php echo "delete.php?id=". $user["id"] ?>"class="btn btn-danger">
                <i class="fa fa-trash" aria-hidden="true"></i>
              </a>
          </td>
        </tr>
          <?php } ?>
          
    </tbody>
    </table>
  </div>
</body>

</html>
