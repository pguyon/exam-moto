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
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Modèle</th>
                <th scope="col">type</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Yamaha</td>
                <td>CBR</td>
                <td>test</td>
                <td>Image</td>
            </tr>

        </tbody>
    </table>



</body>

<?php
require 'Vue/Parts/global.js.php'
?>

</html>