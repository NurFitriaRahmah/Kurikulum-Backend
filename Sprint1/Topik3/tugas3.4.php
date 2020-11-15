<?php
for ($n=1 ; $n !=19 ; $n++) {
     if (!($n % 2)){
        continue;
    }if ($n == 18){
        continue;
    }else{
        echo $n." ";
    }
}