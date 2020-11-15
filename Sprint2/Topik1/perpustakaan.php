<?php
class buku{
    
    public $judul_buku,
           $ISBN,
           $jumlah_buku;

    public function __construct($judul_buku="judul_buku",$ISBN="ISBN",$jumlah_buku="jumlah_buku"){
    $this->judul_buku=$judul_buku;
    $this->ISBN=$ISBN;
    $this->jumlah_buku=$jumlah_buku;
    }

    public function getinfo(){
        return "$this->judul_buku, $this->ISBN, $this->jumlah_buku";
    }

}

$buku1=new buku("BELAJAR KODING",12345,2);
$buku2=new buku("BELAJAR OOP DASAR",6789,1);

echo "Peminjaman : ".$buku1->getinfo();
echo "<br>";
echo "Pengembalian : ".$buku2->getinfo();