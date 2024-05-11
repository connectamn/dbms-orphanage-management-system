<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
    $r_number = $_POST['r_number'];
    $room_super_id = $_POST['room_super_id'];
    $bed_number = $_POST['bed_number'];

    $sql = "INSERT INTO `Room` (`R_number`, `Room_super_id`, `Bed_Number`) VALUES ('$r_number', '$room_super_id', '$bed_number')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: Room_index.php?msg=New record created successfully");
        exit(); // Ensure script execution stops after redirection
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


    <title>Add New Room</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-between fs-3 mb-5" style="background-color: #00ff5573;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-user-friends me-2"></i> Room - Add New Entry
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
        <div class="text-center mb-4">
            <h3>Add New Room</h3>
            <p class="text-muted">Complete the form below to add a new room</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <label class="form-label">Room Number:</label>
                    <input type="number" class="form-control" name="r_number" placeholder="Room Number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Room Supervisor ID:</label>
                    <input type="number" class="form-control" name="room_super_id" placeholder="Room Supervisor ID">
                </div>

                <div class="mb-3">
                    <label class="form-label">Bed Number:</label>
                    <input type="number" class="form-control" name="bed_number" placeholder="Bed Number">
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="Room_index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
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
