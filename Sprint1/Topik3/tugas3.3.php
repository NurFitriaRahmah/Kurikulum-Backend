<?php
for ($n=1 ; $n !=9 ; $n++) {
    if (!($n % 2)){
        continue;
    }if ($n == 8){
        continue;
    }else{
        echo $n." ";
    }
}


