<?php
for($i=0; $i<9; $i++){
    for($j=0; $j<9; $j++){
        if($i==$j||$i==$j+1||$i==$j+2||$i==$j+3||$i==$j+4){
            echo "+";
        }else{
            echo"-";
        }
    }
    echo"\n";
}