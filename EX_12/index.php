<?php


function primo($numero){
    $contador =0;
    for ($i=2; $i<$numero-1; $i++) {
        if ($numero%$i ==0) {
            $contador++;
        }
    }
    if ($contador==0) {
        echo "el número es primo";


    }else if ($contador>0){
        echo "el número no es primo";
}
}
primo(13);

?>

