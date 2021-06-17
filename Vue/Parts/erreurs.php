<?php
if (count($errors) > 0) {
    echo ('<ul style="color: red">');
    foreach ($errors as $error) {
        echo ('<li>' . $error . '</li>');
    }
    echo ('</ul>');
}
