<html>

<head>
    <?php
    include 'Vue/Parts/global-stylesheet.php';
    ?>
    <link rel="stylesheet" href="Public/css/login.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2>Me connecter</h2>
            <form method="post">
                <input type="text" id="username" class="fadeIn second" name="username" placeholder="login">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
                <?php
                require 'Vue/Parts/erreurs.php';
                ?>
            </form>
            <div id="formFooter mt-2">
                <a class="underlineHover" href="index.php?controller=moto&action=list">Retour à la liste des motos</a>
            </div>

        </div>
    </div>
</body>

<?php
include 'Vue/Parts/global.js.php';
?>

</html>