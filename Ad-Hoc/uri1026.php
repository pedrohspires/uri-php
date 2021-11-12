<?php

function BinaryNumberInit(){
    for($count = 0; $count < 32; $count++)
        $NumBin[] = 0;
    return $NumBin;
}

function DecimalToBinary(int $Num){
    $NumBin = BinaryNumberInit();
    $count = 31;
    while($Num >= 2 && $count > 0){
        $NumBin[$count--] = (int)$Num%2;
        $Num = $Num/2;
    }
    $NumBin[$count] = (int)$Num;
    return $NumBin;
}

function BinaryToDecimal(array $Num){
    $DecimalNum = 0;
    for($count = 0; $count < 32; $count++)
        $DecimalNum += $Num[31-$count] * pow(2, $count);
    return $DecimalNum;
}

function MofizSum(int $NumA, int $NumB){
    $BinaryNumA = DecimalToBinary($NumA);
    $BinaryNumB = DecimalToBinary($NumB);
    $NumSum = BinaryNumberInit();

    for($count = 31; $count >= 0; $count--){
        $NumSum[$count] = (!$BinaryNumA[$count] && $BinaryNumB[$count]) || 
                          ($BinaryNumA[$count] && !$BinaryNumB[$count]) == 1 
                          ? 1 : 0;
    }
    return BinaryToDecimal($NumSum);
}


while(1){
    fscanf(STDIN, "%d %d\n", $NumA, $NumB);
    if(!feof(STDIN)){
        echo MofizSum($NumA, $NumB)."\n";
    }
    else break;
}