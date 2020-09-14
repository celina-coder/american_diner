<?php include 'header_admin.php'; ?>
    <main>
        <div class="container admin">
             <div class="row">
                <div class="col-sm-6">    
                    <h1><strong>Voir des items</strong></h1>
                    <br>
                <form>
                    <div class="form-group">
                        <label>Nom:</label><?php echo ' ' . $item['name']; ?>
                    </div>
                    <div class="form-group">
                        <label>Description:</label><?php echo ' ' . $item['description']; ?>
                    </div>
                    <div class="form-group">
                        <label>Prix:</label><?php echo ' ' . number_format((float)$item['price'],2,'.', "") .' €'; ?>
                    </div>
                    <div class="form-group">
                        <label>Catégories:</label><?php echo ' ' .$item['category']; ?>
                    </div>
                    <div class="form-group">
                        <label>Image:</label><?php echo ' ' . $item['image']; ?>
                    </div>
                </form>
                <br>
                <div class="form-actions">
                    <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                </div>
             </div>
             <div class="col-sm-6 col-md-4">
                        <div class="thumbnail"> 
                            <img src="<?php echo'../public/images/' .$item['image'];?>" alt="Image">
                            <div class="price"><?php echo ' ' . number_format((float)$item['price'],2,'.', "") .' €'; ?></div>
                            <div class="caption"> 
                                <h4><?php echo ' ' . $item['name']; ?></h4>
                                <p><?php echo ' ' . $item['description']; ?></p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>
<?php include 'footer_admin.php'; ?>
    