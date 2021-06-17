<html>

<head>
    <?php
    require 'Vue/Parts/global-stylesheet.php';
    ?>
</head>

<body>
    <div class="container">
        <div class="row col-12">
            <form method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Entrez votre username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Se connecter</button>
                <a class="btn btn-primary" href="index.php?controller=moto&action=list" role="button">retour</a>

            </form>
        </div>
    </div>
</body>

<?php
require 'Vue/Parts/global.js.php';
?>

</html>