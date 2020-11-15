<?php
class Rumus{
    static $p="Panjang",
           $l="Lebar";    

    public static function persegipanjang(){
        echo "Luas Persegi Panjang = ";
    }
}

Rumus::persegipanjang();
echo Rumus::$p;
echo" * ";
echo Rumus::$l;