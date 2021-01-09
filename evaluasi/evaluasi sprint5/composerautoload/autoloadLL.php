<?php

    require "vendor/autoload.php";

    use Bangundatar2\LayangLayang;
        
    $ll = new LayangLayang();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    
        <h2>Hasil</h2>
        <?php
        
            if (isset($_POST['layanglayang'])) {
                $s1 = $_POST['sisi1'];
                $s2 = $_POST['sisi2'];
                $d1 = $_POST['diagonal1'];
                $d2 = $_POST['diagonal2'];
                $hasil = $ll->LL($s1, $s2, $d1, $d2);
                echo $hasil;
            }
        
        ?>
    
    </fieldset>
</body>
</html>