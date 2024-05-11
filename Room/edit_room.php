<?php
include "db_conn.php";

$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $r_number = $_POST['r_number'];
  $room_super_id = $_POST['room_super_id'];
  $bed_number = $_POST['bed_number'];

  $sql = "UPDATE `Room` SET `R_number`='$r_number', `Bed_Number`='$bed_number' WHERE Room_super_id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: room_index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

$sql = "SELECT * FROM `Room` WHERE Room_super_id = $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>OMS - Edit Room Information</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    OMS - Edit Room Information
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Room Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="mb-3">
          <label class="form-label">Room Number:</label>
          <input type="number" class="form-control" name="r_number" value="<?php echo $row['R_number'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Bed Number:</label>
          <input type="number" class="form-control" name="bed_number" value="<?php echo $row['Bed_Number'] ?>">
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="room_index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
