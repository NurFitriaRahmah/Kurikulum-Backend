<?php

  echo "Jumlah input : ";

  $banyakData = fgets(STDIN);
  echo "banyak data input : ". $banyakData;

  for($i=1; $i < $banyakData; $i++){
      echo "Input data ke : ". $i .$banyakData;
      $data = fgets(STDIN);
      $array[] = $data;// [] mendeklarasikan klo tipe datanya array

      //sort($data);
       echo"urutan baru : " . $data;
      print_r($data);
    
    if (gettype($data)=='double'){
      $data=floor($data);
      $med=$array[$data];
    }else{
      $data=floor($data);
      $data1=round($data);
      $med=($data+1)/2;

    }
  }
  echo " median : ". $med;
