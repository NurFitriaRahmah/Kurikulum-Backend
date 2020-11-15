<?php
for($i=1; $i<=6; $i++){
    for($j=1; $j<=6; $j++){
        if($j<$i){
            echo "$j";
        }else{
            echo"";
        }
    }
    echo"\n";
}