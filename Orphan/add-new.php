<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $child_name = $_POST['child_name'];
   $child_age = $_POST['child_age'];
   $child_gender = $_POST['child_gender'];
   // Assuming you handle file upload properly and store the path in the database
   $child_photo = $_POST['child_photo'];
   $child_arrival_date = $_POST['child_arrival_date'];
   $child_allergic_issue = $_POST['child_allergic_issue'];
   $child_blood_group = $_POST['child_blood_group'];

   $sql = "INSERT INTO `OMS`(`id`, `child_name`, `child_age`, `child_gender`, `child_photo`, `child_arrival_date`, `child_allergic_issue`, `child_blood_group`) VALUES (NULL,'$child_name','$child_age','$child_gender','$child_photo','$child_arrival_date','$child_allergic_issue','$child_blood_group')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>OMS - Add New Child</title>
</head>

<body>
   
   <nav class="navbar navbar-light justify-content-between fs-3 mb-5" style="background-color: #00ff5573;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-user-friends me-2"></i> OMS - New Entry
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
         <h3>Add New Entry</h3>
         <p class="text-muted">Complete the form below to add a new child</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="mb-3">
               <label class="form-label">Child Name:</label>
               <input type="text" class="form-control" name="child_name" placeholder="Child Name">
            </div>

            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Age:</label>
                  <input type="number" class="form-control" name="child_age" placeholder="Age">
               </div>

               <div class="col">
                  <label class="form-label">Gender:</label>
                  <select class="form-select" name="child_gender">
                     <option value="male">Male</option>
                     <option value="female">Female</option>
                  </select>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Child Photo:</label>
               <!-- Input for file upload -->
               <input type="file" class="form-control" name="child_photo">
            </div>

            <div class="mb-3">
               <label class="form-label">Arrival Date:</label>
               <input type="date" class="form-control" name="child_arrival_date">
            </div>

            <div class="mb-3">
               <label class="form-label">allergic Issue:</label>
               <input type="text" class="form-control" name="child_allergic_issue">
            </div>

            <div class="mb-3">
               <label class="form-label">Blood Group:</label>
               <select class="form-select" name="child_blood_group">
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
               </select>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="http://localhost/OMS/Orphan/index.php" class="btn btn-danger">Cancel</a>
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
