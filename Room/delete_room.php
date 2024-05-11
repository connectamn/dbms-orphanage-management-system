<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `Room` WHERE Room_super_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: room_index.php?msg=Room deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
