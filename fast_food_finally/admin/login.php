<?php
require_once 'database.php';

if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if(isset($_SESSION['logged']))

{
// var_dump('1');die;
    if($_SESSION["logged"])
    {
        // redirection index admin
        header("Location: ../admin/index.php"); // http://localhost/fast_food.p3/admin/index.php
    }
}elseif(!isset($_SESSION['logged']) ||  !$_SESSION['logged']){
    if(isset($_POST["email"]) && isset($_POST["password"]))
   
    {
        $db = database::Connect();
    
    
        $stmt = $db->prepare("SELECT * FROM user WHERE email LIKE :email");
        $stmt->execute([
            "email" => $_POST["email"]
        ]);
    
        $user = $stmt->fetch();
    
        if($user)
        {
            
            if(password_verify($_POST["password"], $user["password"]))
            {
                
                $_SESSION = [
                    "logged" => true
                ];
                header("Location: ../admin/index.php");
            }else{
            
               echo "Mot de passe incorrect ";
               
           header("Location: ../index.php");

            }
        }else{
            
           echo "Cette adresse mail n'existe pas";

           header("Location: ../index.php");
        }
    
    }

}