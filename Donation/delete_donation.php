<?php
include "db_conn.php";

$delete_id = $_GET["delete_id"];
$sql = "DELETE FROM `donation` WHERE d_id = $delete_id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: donation_index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
