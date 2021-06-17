<html>

<head>
    <?php
    include 'Vue/Parts/global-stylesheet.php';
    ?>
    <link href="Public/css/admin.css" rel="stylesheet">
</head>

<body>

    <?php
    include 'Vue/admin/menuadmin.php';
    ?>
    <div class="container mt-5 text-center">
        <h1>Détail de la moto <?php echo ($moto->getMarque() . ' ' . $moto->getModel()); ?></h1>

        <img src="<?php echo ($moto->getImage()); ?>" />
    </div>
    <a class="btn btn-primary" href="index.php?controller=admin&action=administration" role="button">Retour</a>
</body>

<?php
include 'Vue/Parts/global.js.php';
?>

</html>