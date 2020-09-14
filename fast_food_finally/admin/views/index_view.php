
<?php include 'header_admin.php'; ?>
    <main>
        <div class="container admin">
            <div class="tab">
                <h1><strong>Liste des items</strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                    <form class="deconnexion" action="logout.php" method="post">
                        <div><input type="submit" name="submit" class="btn btn-warning" value="Déconnexion"></div> 
                    </form>
            <table class="table table-striped table-bordered col-sm-2 col-sm-6">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Catégories</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'index.php';?>
                    {
                            echo '<tr>';
                            echo '<td>'. $item['name'] .'</td>';
                            echo '<td>'. $item['description'] .'</td>';
                            echo '<td>'. number_format((float)$item['price'],2,'.', '') .'</td>';
                            echo '<td>'. $item['category'] .'</td>';
                            echo '<td width=300>';
                            echo '<a class="btn btn-default" href="view.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo '  ';
                            echo '<a class="btn btn-primary" href="update.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo '  ';
                            echo '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    
                </tbody>
            </div>
        </div>
    </main>
<?php include 'footer_admin.php'; ?>