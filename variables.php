<?php


function input($prompt){
    echo $prompt;
    $name = trim(fgets(STDIN));

    return $name;
}

//$name = 'Rohail Ahmad';
//
//$father = 'Muhammad Shafi';
//
//echo $name .' '. $father .PHP_EOL;
//
//
//$number1 = 5;
//
//$number2 = 6;
//
//echo $number1+$number2.PHP_EOL;
//
//echo $number1-$number2.PHP_EOL;
//
//echo $number1*$number2  . PHP_EOL;
//
//echo $number1/$number2.PHP_EOL;
//
//$n = input( 'Enter any number  -- ' );
//
//if($n%2==0){
//    echo "Even";
//}else{
//    echo 'Odd';
//
//}

function factorial($num){

    $f=1;

    for ($i=1; $i<=$num; $i++){

        $f*=$i;

    }
    echo $f;

}

//$n = input('enter number  ');
//factorial($n);

//$array = [3,4,5,6,7,8];
//
//$result = array_map( fn($n) => $n*$n , $array);
//
//print_r($result);

$array = ["Apple", "Banana", "Cherry"];
foreach ($array as $item => $value) {
    echo $item. ' => '.$value.PHP_EOL;
}




