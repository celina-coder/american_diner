<?php include "header.php" ?>
<main>
    <div id="container" class="row">
        <?php forEach($items as $item):?>
            <div class="col-sm-6 col-md-4"> 
                <div class="thumbnail"> <!--contour-->
                 <img class="img-thumbnail" src="<?= "public/images/".$item['image']  ?>" alt="photo">
                    <div class="caption"> <!--afficher les éléments en dessous de la photo-->
                        <h4><?= ($item['name'])?></h4>
                        <p class="text-white"><?= ($item['description'])?></p>
                        <div class="price"><?= number_format((float)$item['price'],2,'.', '')?> €</div>
                    </div>
                 </div>
            </div>
         <?php endforeach ?>
    </div>       
</main>
