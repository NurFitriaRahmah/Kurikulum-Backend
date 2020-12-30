<?php

class Koneksi
{
    public function konek()
    {
        
        $con = mysqli_connect('localhost', 'fitria', '?>mypass321', 'evaluasi');

        return $con;
    }
}
