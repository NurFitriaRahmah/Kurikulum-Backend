<?php
function persegi($panjang,$tinggi){
    if($panjang<0||$tinggi<0){
        throw new Exception("Input yang anda masukkan tidak boleh kurang dari 0");
    }
    return true;
}

try{
    persegi(-1,2);
    echo "Gak error"."\n";
}catch(Exception $x){
    echo "Pesan : ".$x->getMessage();
}finally{
    echo " finally";
}