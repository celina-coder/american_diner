<?php

foreach($db->query('SELECT * FROM categories') as $row) // recup les cat chaque enregistrement il va les mettre dans le row il va un boucle.
{
    if($row['id'] == $category)
    {
    echo '<option selected="selected" value="' .$row['id'] . '">' .$row['name'] . '</option>';
}else{
    echo '<option value="' .$row['id'] . '">' .$row['name'] . '</option>';
}

}


?>