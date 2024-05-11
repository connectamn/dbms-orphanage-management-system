<?php
include "db_conn.php";

$id = $_GET["id"];
$sql = "DELETE FROM `House_Parent` WHERE HP_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: HouseParent_index.php?msg=House Parent data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>
