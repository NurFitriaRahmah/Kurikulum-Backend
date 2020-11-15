<?php
  echo "Jumlah input : ";

  $banyakData = fgets(STDIN);
  echo "banyak data input : ". $banyakData;

  for($i=1; $i <= $banyakData; $i++){
      echo "Input data ke : ". $i .$banyakData;
      $data = fgets(STDIN);
      $array[] = $data;

      
  }
  $sum = array_sum($array);
  $count = count($array);
  echo $sum /$count;
//   echo "mean = " . array_sum($array)/count($array);
