<?php

session_start();

setcookie('login', '', time()-3600);

$_SESSION['loginNotification'] = 'U bent uitgelogd.';

header('location:phpoefening036-login.php');

?>