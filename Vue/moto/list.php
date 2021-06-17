<html>

<head>
    <?php
    require 'Vue/Parts/global-stylesheet.php'
    ?>
</head>

<body>
    <?php
    include 'Vue/menu.php';
    ?>

    <?php

    foreach ($motos as $moto)

        echo ('
        <div class="card" style="width: 18rem;">
        <img src="' . $moto->getImage() . '" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">' . $moto->getMarque() . '</h5>
            <p class="card-text">' . $moto->getModel() . '</p>
            <p class="card-text">' . $moto->getType() . '</p>
            <a href="#" class="btn btn-secondary">Détail</a>
        </div>
    </div>
        ')


    ?>





</body>

<?php
require 'Vue/Parts/global.js.php'
?>

</html>