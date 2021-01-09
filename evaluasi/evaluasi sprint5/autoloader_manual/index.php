<?php

function autoloadName()
{
    $file = "name.php";
    if (is_readable($file)) {
        require $file;
    }
}


spl_autoload_register("autoloadName");


$foo = new Name();
$foo->showName("Fitri");


