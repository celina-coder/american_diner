<?php


if(session_status() !== PHP_SESSION_ACTIVE) session_start();

if(!isset($_SESSION['logged']) || !$_SESSION["logged"])
{
        // redirection ver login admin
        header("Location: ../index.php");
 
}

