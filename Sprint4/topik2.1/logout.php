<?php

setcookie('email', '',time() - (86400 * 30), "/");

header('location: index.php');

exit;

?>