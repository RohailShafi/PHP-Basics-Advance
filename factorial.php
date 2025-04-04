<?php

function input($prompt){
    echo $prompt;
    $name = trim(fgets(STDIN));

    return $name;
}

$i = 7;

$f=1;

// while($i>0){

//     $f*=$i;
//     echo $f.PHP_EOL;
    
//     $i--;
// }

// for($i=1; $i<=7; $i++){

//     $f*=$i;
// }
// echo $f;

$age = input('Enter your age ');

if($age<18){
    echo 'Child';
}

elseif($age>=18 and $age<=25){

    echo 'Adult';
}

elseif($age>25 and $age<=50){

    echo 'man';
}

else {
    echo 'Senior Citizen';
}

?>
