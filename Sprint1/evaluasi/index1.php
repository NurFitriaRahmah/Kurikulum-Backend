<?php
//  $x=array("1"."2"."3"."4"."5");
//  $y=array("1"."2"."3"."4"."5"."6");

// function angka(string $collectionValue): int {
//     $collectionValue = array(5,9,5,6,5,6,0,1,5,9,4,6,6,0,5,6);
//     asort($collectionValue);
// }

function selectionValue(string $collectionValue):int {
    $pemisah=[0];
    $to_array=str_split($collectionValue);
    var_dump($to_array);
    $filter=array_diff($to_array,$pemisah);
    var_dump($filter);
  
    $separate=array_chunk($filter,6);
  
    $conv=function()use($separate){
      asort($separate[0]);
      asort($separate[1]);
      asort($separate[2]);
      echo implode($separate[0]);
      echo implode($separate[1]);
      echo implode($separate[2]);
    };
    return intval($conv());
  }
  
  selectionValue(5956560159466056);

//////////////////////////////////////////////////////

echo "Selamat Datang Di Program Input Data";
echo PHP_EOL;

$students=[
    ["Udin", "T001", "Programmer", "Backend", "74"],
    ["Umair", "T003", "Multimedia", "Graphic Design", "19"]

];

foreach($students as $std):
    echo 'Nama :'.$std[0];
    echo PHP_EOL;
    echo 'NIK :'.$std[1];
    echo PHP_EOL;
    echo 'Jurusan :'.$std[2];
    echo PHP_EOL;
    echo 'Divisi :'.$std[3];
    echo PHP_EOL;
    echo 'Usia ;'.$std[4];
    echo PHP_EOL;
endforeach;

$Jurusan=[
    ["Udin", "Backend"],
    ["Umair", "Multimedia"]
];
echo "Yang minat sebagai Backend adalah ";
if($Jurusan="Backend"){
    echo "Udin";
}else{
    echo "Umair";
}
echo PHP_EOL;
$Ages=[
    ["Udin", "74"],
    ["Umair", "19"]
];
echo "Usia kurang dari 25 adalah ";

if($Ages<"25"){
    echo "Udin";
}else{
    echo "Umair"; 
}
echo PHP_EOL;
echo "Usia paling muda adalah Umair";
    