<?php

    namespace BangunDatar;

    class Lingkaran 
    {

       public function Area($pi, $r)
       {
           echo "Luas lingkaran : ". $pi * $r *$r ."<br><br>";
           echo "Keliling lingkaran : ". 2 * $pi * $r;
       }

    }