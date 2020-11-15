<?php
for($i=0; $i<9; $i++){
    for($j=0; $j<9; $j++){
        if($i==$j){
            echo"+";
        }else{
            echo"-";
        }
    }
    echo"\n";
}