<?php 
if(isset($_SESSION['id']))
{
    $_SESSION['id']=" ";
}
session_destroy();
header('location: login.php');
        ?>