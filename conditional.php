<?php

$age = 80;

if ($age<18 and $age>0){
    echo "Boy";
}

elseif ($age==18){

    echo "Adult";
}

elseif ($age>18 and $age<=50){

    echo "Men";
}
elseif ($age>50 and $age<100){

    echo "Senior Citizen";
}

else{

    echo "Please enter a valid age";
}