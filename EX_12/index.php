<?php


function primo($numero){
    if ($numero == 1)
        return 0;
    for ($i = 2; $i <= $numero/2; $i++){
        if ($numero % $i == 0)
            return 0;
    }
    return 1;
}


$number = 7;
$flag = primo($number);
if ($flag == 1)
    echo "Primo";
else
    echo "No es primo"

?>

