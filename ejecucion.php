<?php
$pass = $_POST['pass'];
$user = $_POST['user'];
$pass2 = md5($pass);
$pass3 = crypt($pass2,$user);
echo "su contraseña es:".$pass3;

?>
