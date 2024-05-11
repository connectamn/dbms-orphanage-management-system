<?php
include "db_conn.php";

if (isset($_GET["msg"])) {
  $msg = $_GET["msg"];
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  ' . $msg . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $d_id = $_POST['d_id'];
  $mobile = $_POST['mobile'];

  $sql = "INSERT INTO `donation` (`Name`, `d_id`, `Mobile`) VALUES ('$name', '$d_id', '$mobile')";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: donation.php?msg=New donation record created successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

if (isset($_GET['delete_id'])) {
  $delete_id = $_GET['delete_id'];
  $sql = "DELETE FROM `donation` WHERE `D_ID`='$delete_id'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location: donation_index.php?msg=Donation record deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}
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

  <title>OMS - Donation Management</title>
</head>

<body>
  
  <nav class="navbar navbar-light justify-content-between fs-3 mb-5" style="background-color: #00ff5573;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-donate me-2"></i> OMS - Donation Management
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
    <a href="Donation.php" class="btn btn-dark mb-3">Add</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Donation ID</th>
          <th scope="col">Donor Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `donation`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["D_ID"] ?></td>
            <td><?php echo $row["Name"] ?></td>
            <td><?php echo $row["Mobile"] ?></td>
            <td>
              <a href="edit_donation.php?id=<?php echo $row["D_ID"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete_donation.php?delete_id=<?php echo $row["D_ID"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
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
