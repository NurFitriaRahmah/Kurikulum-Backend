<?php
for($i=0; $i<9; $i++){
    for($j=0; $j<9; $j++){
        if($i==8-9){
            echo"+";
        }else{
            echo"($i,$j)";
        }
    }
    echo"\n";
}