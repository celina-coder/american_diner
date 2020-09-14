<?php 
    require_once 'verify_user.php';
    require 'database.php';

    $nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = " ";
    
    if(!empty($_POST)){

        $name = checkInput($_POST['name']);
        $description = checkInput($_POST['description']);
        $price = checkInput($_POST['price']);
        $category = checkInput($_POST['category']);
        var_dump($category);
        $image = checkInput($_FILES['image']['name']);
        $imagePath = '../public/images/'.basename($image);
        $imageExtension= pathinfo($imagePath, PATHINFO_EXTENSION); // extension de l'image
        $isSuccess = true;
        $isUploadSuccess = false;

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
        $imageError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        else{
            $isUploadSuccess = true;
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
            if($_FILES ["image"]["size"] > 500000) //500kb = 500000
            {
                $imageError = "Le fichier ne doit pas dépasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) // si les vérifications sont correct alors tu vas excuter
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath))
                {
                    $imageError = "l y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                }

            }
        }
            if ($isSuccess && $isUploadSuccess) {
                
                    $db = Database::connect();
                    $sql="INSERT INTO `items`(`name`, `description`, `price`, `image`, `category`) VALUES (?, ?, ?, ?, ?)";
                    $rs = $db->prepare($sql);
                    $rs->execute(array($name, $description, $price, $image, 5)); // TODO Remplacer le 5 par $category ! $category doit etre un integer
            
                    header("Location: ../admin/index.php"); 
            }              
        }

    function checkInput($data) {
        $data = trim($data); 
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
include 'views/insert_view.php';

?>



                