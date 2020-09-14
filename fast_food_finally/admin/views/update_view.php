
<?php include 'header_admin.php'; ?>
    <main>
        <div class="container admin">
            <div class="row">
                <div class="col-sm-6">
                 <h1><strong>Modifier un items</strong></h1>
                    <form class="form" role="form" action="<?php echo 'update.php?id=' . $id; ?>" method="post" enctype="multipart/form-data"> <!--encoder les photos-->
                        <div class="form-group">
                            <label for="name">Nom:</label>
                            <input type="text" class="form-control" id="name" name="name"placeholder="Nom" value="<?php echo $name; ?>">
                            <span class="help-inline"><?php echo $nameError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description"placeholder="Description" value="<?php echo $description; ?>">
                            <span class="help-inline"><?php echo $descriptionError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="price">Prix:(en €)</label> <!--step : augnenter par tranche de 1 cts le prix-->
                            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="prix" value="<?php echo $price; ?>">
                            <span class="help-inline"><?php echo $priceError; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="category">Catégorie</label>
                                 <select class="form-control" id="category" name="category">
                                    <?php require "update_categories.php";?>
                                </select>
                             <span class="help-inline"><?php echo $categoryError; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Image:</label>
                            <p> <?php echo $image; ?> </p>
                            <label for="image">Sélectionner une image</label>
                            <input type="file" id="image" name="image">
                            <span class="help-inline"><?php echo $imageError;?></span>
                        </div>
                        <br>
                        <div class="form-actions">
                            <button type="subtmit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
                            <a class="btn btn-primary" href="../admin/index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail"> 
                     <img src="<?php echo'../public/images/' .$image; ?>" alt="...">
                        <div class="price"><?php echo number_format((float)$price,2,'.', "") .' €'; ?></div>
                            <div class="caption"> 
                                <h4><?php echo $name; ?></h4>
                                <p><?php echo $description; ?></p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include 'footer_admin.php'; ?>
       