<?php
class Register{
    public function __construct($nama,$ttl,$alamat,$jurusan,$contact){
        $this->nama=$nama;
        $this->ttl=$ttl;
        $this->alamat=$alamat;
        $this->jurusan=$jurusan;
        $this->contact=$contact;
    }
    function get_nama(){
        return $this->nama;
    }
    function get_ttl(){
        return $this->ttl;
    }
    function get_alamat(){
        return $this->alamat;
    }
    function get_jurusan(){
        return $this->jurusan;
    }
    function get_contact(){
        return $this->contact;
    }

    public static function insertStudent()
    {
        echo"Form Pendaftaran Santri Baru".PHP_EOL;
        echo PHP_EOL;
        echo"Nama Calon Santri = ".PHP_EOL;
        $nama=(int)fgets(STDIN);
        echo"Tempat,Tanggal Lahir = ".PHP_EOL;
        $ttl=(int)fgets(STDIN);
        echo"Alamat Lengkap = ".PHP_EOL;
        $alamat=(int)fgets(STDIN);
        echo"Jurusan Pilihan = ".PHP_EOL;
        $jurusan=(int)fgets(STDIN);
        echo"Contact yang bisa dihubungi : ".PHP_EOL;
        echo" Nomor Telpon/HP = ";
        $noHP=(int)fgets(STDIN);
        echo" Nomor WhatApp = ";
        $noWA=(int)fgets(STDIN);
        echo" Email = ";
        $email=(int)fgets(STDIN);
    }
}

Register::insertStudent().PHP_EOL;