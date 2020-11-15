<?php
echo "Jumlah input : ";

  $banyakData = fgets(STDIN);
  echo "banyak data input : ". $banyakData;

  for($i=1; $i <= $banyakData; $i++){
      echo "Input data ke : ". $i .$banyakData;
      $data = fgets(STDIN);
      $array[] = $data;

      
  }

  $a=array_count_values ($array);
  foreach($a as $key => $val);
  if($val==max($a)){
      
  }
  echo "modusnya [$key] dengan banyak duta $val";