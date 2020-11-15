<?php
for($i=0; $i<9; $i++){
    for($j=0; $j<9; $j++){
        if($i==$j||$j==$i+1||$j==$i+2||$j==$i+3||$j==$i+4||$j==$i+5||$j==$i+6||$j==$i+7||$j==$i+8){
            echo "+";
        }else{
            echo"-";
        }
    }
    echo"\n";
}