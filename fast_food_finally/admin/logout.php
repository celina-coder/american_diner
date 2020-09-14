<?php require_once 'verify_user.php' ;


$_SESSION = [];
session_unset();

header("Location: ../index.php");

?>