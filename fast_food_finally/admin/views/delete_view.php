<?php include 'header_admin.php'; ?>
    <main>
        <div class="container admin">
            <div class="row">
                <h1><strong>Supprimer des items</strong></h1>
                     <form class="form" role="form" action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                            <p class="alert alert-warning"> Etes vous sûre de vouloir supprimer cet item ?</p>
                        <div class="form-actions">
                        <button type="subtmit" class="btn btn-warning">Oui</button>
                            <a class="btn btn-default" href="index.php">Non</a>
                         </div>
                    </form>
            </div>
        </div>
    </main>
<?php include 'footer_admin.php';?>
