<?php
$contrasenas = password_hash('admin', PASSWORD_DEFAULT, ['cost' =>10]);
echo $contrasenas;

?>