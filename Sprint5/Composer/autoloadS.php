<?php

    require "vendor/autoload.php";

    use BangunDatar\Segitiga;

    // function autoloadSegitiga()
    // {
    //     $file = "Segitiga.php";
    //     if (is_readable($file)) {
    //         require $file;
    //     }
    // }

    // spl_autoload_register("autoloadSegitiga");

    $segitiga = new Segitiga();

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
        <h1>Hasil</h1>
        <?php 
        if(isset($_POST['lingkaran'])){
            $r = $_POST['jari_jari'];
            $pi = $_POST['pi'];
            $hasil = $lingkaran->Area($r, $pi);
            echo $hasil;
        } else if(isset($_POST['persegi'])){
            $s = $_POST['sisi'];
            $hasil = $persegi->Area($s);
            echo $hasil;      
        } else if(isset($_POST['segitiga'])){
            $a = $_POST['alas'];
            $t = $_POST['tinggi'];
            $hasil = $segitiga->Area($a, $t);
        
        }
        ?>
    </fieldset>
</body>
</html>

