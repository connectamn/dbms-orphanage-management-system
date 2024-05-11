<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `Trust` WHERE ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: trust_index.php?msg=Trust deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>
