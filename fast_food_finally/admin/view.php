<?php
require_once 'verify_user.php';
require_once 'database.php';

if(!empty($_GET['id']))
{

    $id = checkInput($_GET['id']);
}

$db = Database::connect();

$stmt = $db->prepare('SELECT items.id, items.name, items.description, items.price, items.image, categories.name AS category
FROM items LEFT JOIN categories ON items.category = categories.id WHERE items.id = ?');

$stmt->execute(array($id));
$item = $stmt->fetch();
Database::disconnect();


function checkInput($data)
{
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 include 'views/view_view.php';

?>


       