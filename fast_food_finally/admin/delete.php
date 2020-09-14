<?php 
    require_once 'verify_user.php';
    require_once 'database.php';
    //stocker  les info dans l'id au premier passage
    if(!empty($_GET['id']));{
        $id = checkInput($_GET['id']);
    }
   
    if(!empty($_POST))
    {
        $id = checkInput($_POST['id']);
        $db = Database::connect();
        $stmt= $db->prepare("DELETE FROM items where id = ?");
        $stmt->execute(array($id));
        Database::disconnect();
        header("Location: index.php");

    }


    function checkInput($data)
{
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include 'views/delete_view.php';

?>


