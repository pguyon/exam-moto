<html>

<head>
    <?php
    require 'Vue/Parts/global-stylesheet.php';
    ?>

    <link href="Public/css/admin.css" rel="stylesheet">
</head>

<body>
    <?php
    require 'Vue/admin/menuadmin.php';
    ?>
    <div class="container mt-5">
        <div class="row col-12">
            <?php
            if (is_array($motos) || is_object($motos)) {

                foreach ($motos as $moto) {

                    echo ('
                    <div class="card" style="width: 18rem;">
                    <img src="' . $moto->getImage() . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $moto->getMarque() . '</h5>
                        <p class="card-text">' . $moto->getModel() . '</p>
                        <p class="card-text">' . $moto->getType() . '</p>
                        <a href="index.php?controller=admin&action=motodetail&id=' . $moto->getId() . '" class="btn btn-success">Détail</a>
                        <a href="index.php?controller=admin&action=motodelete&id=' . $moto->getId() . '" class="btn btn-secondary">Supprimer</a>
                    </div>
                </div>
                ');
                }
            }

            ?>

        </div>

    </div>





</body>

<?php
require 'Vue/Parts/global.js.php'
?>

</html>