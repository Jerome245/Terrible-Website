<?php

$server ="localhost";
$uname = "root";
$pword = "";
$db = "info_db";

$con = mysqli_connect($server,$uname,$pword,$db) or die ("Connect Failed..." . mysqli_connect_error());

?>