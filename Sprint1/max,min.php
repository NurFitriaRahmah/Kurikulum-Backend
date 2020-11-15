<?php

echo "Jumlah input : ";

  $banyakData = fgets(STDIN);
  echo "banyak data input : ". $banyakData;

  for($i=1; $i <= $banyakData; $i++){
      echo "Input data ke : ". $i .$banyakData;
      $data = fgets(STDIN);
      $array[] = $data;

      
  }
  echo"max = ". (max(array($data)));

/////////////////////////////////////////////////

  echo "Jumlah input : ";

  $banyakData = fgets(STDIN);
  echo "banyak data input : ". $banyakData;

  for($i=1; $i <= $banyakData; $i++){
      echo "Input data ke : ". $i. $banyakData;
      $data = fgets(STDIN);
      $array[] = $data;
      
  }
  echo"min = " . (min(array($data)));
