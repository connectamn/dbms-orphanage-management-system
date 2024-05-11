<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>OMS - Child Management</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-between fs-3 mb-5" style="background-color: #00ff5573;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-user-friends me-2"></i> OMS - Child Management
            </a>
            <div>
                <a class="btn btn-dark me-2" href="http://localhost/OMS/home.html">
                    <i class="fas fa-home"></i>
                </a>
                <button class="btn btn-outline-danger" onclick="exitPage()">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </div>
        </div>
    </nav>


  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>


    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Child Name</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Photo</th>
          <th scope="col">Arrival Date</th>
          <th scope="col">allergic Issue</th>
          <th scope="col">Blood Group</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `OMS`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["child_name"] ?></td>
            <td><?php echo $row["child_age"] ?></td>
            <td><?php echo $row["child_gender"] ?></td>
            <td><img src="<?php echo $row["child_photo"] ?>" alt="Child Photo" style="max-width: 100px;"></td>
            <td><?php echo $row["child_arrival_date"] ?></td>
            <td><?php echo $row["child_allergic_issue"] ?></td>
            <td><?php echo $row["child_blood_group"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-BJmk6tq83nX+yqEe8A/YE8blslYRXg/wQf3b1aDTfWlH9ykgW+alCwSZHZaaGtVMvCJzWMez24LkqzddE9jDcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom JS for exit function -->
<script>
    function exitPage() {
        if (confirm("Are you sure you want to exit?")) {
            window.location.href = "http://localhost/OMS/home.html";
        }
    }
</script>


</body>

</html>
