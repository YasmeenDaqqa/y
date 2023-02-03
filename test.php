<?php
echo "enter the roman  : ";

$roman_num = fgets(STDIN,1024);
$roman_num = trim($roman_num);

$arr1 =[
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000
  ];

$integerNum = 0;

for($m=0 ; $m < strlen($roman_num); $m++){
    if(strlen($roman_num)-1 > $m && $roman_num[$m] == 'I' && ($roman_num[$m+1] == 'V' || $roman_num[$m+1] == 'X')){
        $Num = $arr1[$roman_num[$m+1]] - $arr1[$roman_num[$m]];
        $integerNum += $Num;
        ++$m;
    }

    elseif(strlen($roman_num)-1 > $m && $roman_num[$m] == 'X' && ($roman_num[$m+1] == 'L' || $roman_num[$m+1] == 'C')){
        $Num = $arr1[$roman_num[$m+1]] - $arr1[$roman_num[$m]];
        $integerNum += $Num;
        ++$m;
    }

    elseif(strlen($roman_num)-1 > $m &&$roman_num[$m] == 'C' && ($roman_num[$m+1] == 'D' || $roman_num[$m+1] == 'M')){
        $Num = $arr1[$roman_num[$m+1]] - $arr1[$roman_num[$m]];
        $integerNum += $Num;
        ++$m;
    }
    
    else{
    $integerNum += $arr1[$roman_num[$m]];
    }
}


echo $integerNum;