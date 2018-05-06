<?php
session_start();
$_SESSION["admin_name"]="";
$_SESSION["admin_pass"]="";
session_destroy();
header("location:adminlogin.php");
