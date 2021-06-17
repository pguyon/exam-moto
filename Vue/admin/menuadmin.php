<html>

<head>
    <?php
    require 'Vue/Parts/global-stylesheet.php';
    ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=moto&action=add">Ajouter une moto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=admin&action=disconnect">Me déconnecter</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</body>
<?php
require 'Vue/Parts/global.js.php';
?>

</html>