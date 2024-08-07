<?php //php code for establishing connection from database
$conn = mysqli_connect("localhost", "root", "", "contacts");//prepare connection from Database

if (!$conn) { //connection checking
    die("Connection Failed :" . mysqli_connect_error());
}
// echo "Connection Successfull";

?>