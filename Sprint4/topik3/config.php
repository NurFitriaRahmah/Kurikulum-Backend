<?php

class Config
{
    public function connect()
    {
        
        $con = mysqli_connect('localhost', 'fitria', '?>mypass321', 'myblog');

        return $con;
    }
}
