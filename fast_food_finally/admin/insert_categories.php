
<?php
    $db=Database::Connect();
    foreach($db->query('SELECT * FROM categories') as $row) // recup les cat chaque enregistrement,les mettre dans le row et bouclé boucle.
    {
        echo '<option value"' .$row['id'] . '">' .$row['name'] . '</option>';
    }
    Database::disconnect();
?>

