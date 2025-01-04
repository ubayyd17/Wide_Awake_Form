<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

if(isset($_SESSION['wide_awake_username'])&&isset($_SESSION['wide_awake_admin']))
{
	unset($_SESSION["wide_awake_username"]);
    unset($_SESSION["wide_awake_admin"]);
	
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    header('location:../login.php');
}else{
	//
}
header('location:../login.php');

exit();
?>