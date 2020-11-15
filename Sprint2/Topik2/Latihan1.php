<?php
class Greetings{
    public function __construct($nama){
        echo $nama;
    }
}

$greetings=new Greetings("Selamt Datang ");
$nama=new Greetings("Nur Fitria Rahmah");