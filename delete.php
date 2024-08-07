<?php
include "db_conn.php"; //connection file from databse

$id = $_GET['id'];

$sql = "DELETE FROM `contact_list` WHERE id=$id";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: index.php?msg=Contact Deleted Successfully");
} else {
    echo "Failed " . mysqli_error($conn);
}


?>