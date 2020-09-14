                
<?php 
    require_once 'verify_user.php';
    require 'database.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }
    //variable error
    $nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = "";
    
    // récupération des données existantes
    if(!empty($_POST))
    {

        $name = checkInput($_POST['name']);
        $description = checkInput($_POST['description']);
        $price = checkInput($_POST['price']);
        $category = checkInput($_POST['category']);
        $image = checkInput($_FILES['image']['name']); // initier l'image deja existante
        $imagePath = '../public/images/'.basename($image);
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION); // extension de l'image
        $isSuccess = true;
    
    
        // en cas de champ non rempli envoi d'un message d'erreur
        if(empty($name))
        {
            $nameError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }

        if(empty($description))
        {
         $descriptionError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }

        if(empty($price))
        {
        $priceError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }

        if(empty($category))
        {
        $categoryError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }

        if(empty($image))
        {
        $isImageUpdated = false;
        }
        else{
            $isImageUpdated = true;
            $isUploadSuccess = true;
            // vérification du bon fichier d'extension de l'image
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" )
            {
                $imageError = "Les fichiers autorisés sont : jpg, png, jpeg, gif";
                $isUploadSuccess = false;
            }
            if(file_exists($imagePath))
            {
                $imageError = "Le fichier existe déja";
                $isUploadSuccess = false;
            }
            // vérification de la taille de l'image
            if($_FILES ["image"]["size"] > 500000) //500kb = 500000 
            {
                $imageError = "Le fichier ne doit pas dépasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) // si les verifications sont correct alors tu vas excuter
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
                {
                    $imageError = "il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                }

            }
        }
        
            if(($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated))
            {
                
                $db = Database::connect();
                if($isImageUpdated)

                {
                    //var_dump(1ere étape)
                    $stmt = $db->prepare("UPDATE items set `name` = ?, `description` = ?, price = ?, category = ?, `image` = ? WHERE  id= ?");
                    $stmt->execute(array($name,$description,$price,$category,$image, $id));
                    
                }
                else
                {
                    //var_dump(2e etape) prendre la requete et le mettre dans sql en cas disfonctionnement 
                    $stmt = $db->prepare("UPDATE items set `name` = ?, `description` = ?, price = ?, category = ? WHERE  id= ?");
                    $stmt->execute(array($name,$description,$price,$category, $id));
                }
                Database::disconnect();
                header("Location: index.php");

            }                                               
            else if ($isImageUpdated && !$isUploadSuccess) // vérification si le telechargement s'est bien passé mais il y a un probleme avc l'image
            {
                $db = Database::Connect();
                $stmt = $db->prepare("SELECT image FROM items  WHERE id = ?"); //récupération des images des produits
                $stmt->execute(array($id));
                $item = $stmt->fetch(); 
                $image = $item['image'];
                Database::disconnect();
            }
    }
    else //recupération des données actuelles
    {
        $db = Database::Connect();
        $stmt = $db->prepare("SELECT * FROM items WHERE id = ?");
        $stmt->execute(array($id));
        $item = $stmt->fetch(); // premier passage avant modifier
        $name = $item['name'];
        $description = $item['description'];
        $price = $item['price'];
        $category = $item['category'];
        $image = $item['image'];
        Database::disconnect();
    
    }


    function checkInput($data)
{
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}

include 'views/update_view.php';

?>

