<?php
include("connect.php");

$uname = $_POST['txtUname'];
$pword = $_POST['txtPword'];
$rpword = $_POST['txtRpword'];
$fname = $_POST['txtFname'];
$mname = $_POST['txtMname'];
$lname = $_POST['txtLname'];
$level = $_POST['txtLevel'];

$query = ("INSERT INTO users_tbl (u_id,u_uname,u_pword,u_fname,u_mname,u_lname,u_lvl) VALUES (null,'$uname','$pword','$fname','$mname','$lname','$level')");

$result = mysqli_query($con,$query);
?>

<a href="view_users.php"><input type="button" value="CONTINUE"></a>