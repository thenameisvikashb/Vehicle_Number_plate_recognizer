<?php session_start();
if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
{

    $_SESSION["userid"]="";
    $_SESSION["password"]="";
    
    session_destroy();
    
    header("Location:Gec_Xpress.php");
}
else if(isset ($_SESSION["admin_name"]) && isset ($_SESSION["admin_pass"]))
{
    $_SESSION["admin_home"]="";
    $_SESSION["admiin_pass"]="";
    session_destroy();
    header("Location:admin/Admin_login.php");
}
else
{
    header("Location:Gec_Xpress.php");
}