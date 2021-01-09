<?php

    function autoloadBK()
    {
        $file = "Belahketupat.php";
        if (is_readable($file)) {
            require $file;
        }
    }

    spl_autoload_register("autoloadBK");
    
    $bk = new BelahKetupat();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <fieldset>
    
        <h2>Hasil</h2>
        <?php
        if (isset($_POST['belahketupat'])) {
        $s = $_POST['sisi'];
        $d1 = $_POST['diagonal1'];
        $d2 = $_POST['diagonal2'];
        $hasil = $bk->BK($s, $d1, $d2);
        echo $hasil;
        }
        ?>
    </fieldset>
</body>
</html>