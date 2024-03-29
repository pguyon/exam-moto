<html>

<head>
    <?php
    include 'Vue/Parts/global-stylesheet.php';
    ?>
    <link rel="stylesheet" href="Public/css/login.css">
    <link href="Public/css/admin.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2>Ajout de moto</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="text" id="marque" class="fadeIn second" name="marque" placeholder="Entrez la marque de la moto">
                <input type="text" id="model" class="fadeIn third" name="model" placeholder="Entrez le model de la moto">
                <select class="form-select" aria-label="Default select example" name="type">
                    <option selected>Enduro</option>
                    <option value="custom">Custom</option>
                    <option value="sportive">Sportive</option>
                    <option value="roadster">Roadster</option>
                </select>
                <input type="file" class="form-control" aria-describedby="modeleHelp" name="image" placeholder="Image">
                <input type="submit" class="fadeIn fourth mt-2" value="Ajouter">
                <?php
                require 'Vue/Parts/erreurs.php';
                ?>
            </form>
            <div id="formFooter mt-2">
                <a class="underlineHover" href="index.php?controller=admin&action=administration">Retour</a>
            </div>

        </div>
    </div>
</body>

<?php
include 'Vue/Parts/global.js.php';
?>

</html>