<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $child_name = $_POST['child_name'];
  $child_age = $_POST['child_age'];
  $child_gender = $_POST['child_gender'];
  // Assuming you handle file upload properly and store the path in the database
  $child_photo = $_POST['child_photo'];
  $child_arrival_date = $_POST['child_arrival_date'];
  $child_allergic_issue = $_POST['child_allergic_issue'];
  $child_blood_group = $_POST['child_blood_group'];

  $sql = "UPDATE `OMS` SET `child_name`='$child_name',`child_age`='$child_age',`child_gender`='$child_gender', `child_photo`='$child_photo', `child_arrival_date`='$child_arrival_date', `child_allergic_issue`='$child_allergic_issue', `child_blood_group`='$child_blood_group' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
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

  <title>OMS - Edit Child Information</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    OMS - Edit Child Information
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit Child Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `OMS` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="mb-3">
          <label class="form-label">Child Name:</label>
          <input type="text" class="form-control" name="child_name" value="<?php echo $row['child_name'] ?>">
        </div>

        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Age:</label>
            <input type="text" class="form-control" name="child_age" value="<?php echo $row['child_age'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Gender:</label>
            <input type="text" class="form-control" name="child_gender" value="<?php echo $row['child_gender'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Child Photo:</label>
          <!-- Input for file upload -->
          <input type="file" class="form-control" name="child_photo" value="<?php echo $row['child_photo'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Arrival Date:</label>
          <input type="date" class="form-control" name="child_arrival_date" value="<?php echo $row['child_arrival_date'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">allergic Issue:</label>
          <input type="text" class="form-control" name="child_allergic_issue" value="<?php echo $row['child_allergic_issue'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Blood Group:</label>
          <!-- Dropdown list -->
          <select class="form-select" name="child_blood_group">
            <option value="A+" <?php echo ($row['child_blood_group'] == 'A+') ? "selected" : ""; ?>>A+</option>
            <option value="A-" <?php echo ($row['child_blood_group'] == 'A-') ? "selected" : ""; ?>>A-</option>
            <option value="B+" <?php echo ($row['child_blood_group'] == 'B+') ? "selected" : ""; ?>>B+</option>
            <option value="B-" <?php echo ($row['child_blood_group'] == 'B-') ? "selected" : ""; ?>>B-</option>
            <option value="AB+" <?php echo ($row['child_blood_group'] == 'AB+') ? "selected" : ""; ?>>AB+</option>
            <option value="AB-" <?php echo ($row['child_blood_group'] == 'AB-') ? "selected" : ""; ?>>AB-</option>
            <option value="O+" <?php echo ($row['child_blood_group'] == 'O+') ? "selected" : ""; ?>>O+</option>
            <option value="O-" <?php echo ($row['child_blood_group'] == 'O-') ? "selected" : ""; ?>>O-</option>
          </select>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl
