<?php

$array1 = array('juana', 'mer', 'mecago', 'enamorado');
$minimo =$array1[0];
$maximo =$array1[0];
$minimo_palabras =strlen($array1[0]);
$maximo_palabras =strlen($array1[0]);


for($i=0; $i<count($array1); $i++) {
    $variable=strlen($array1[$i]);
    if(strlen($array1[$i])<=$minimo_palabras) {
        $minimo_palabras = $variable;
        $minimo= $array1[$i];
    }else if(strlen($array1[$i])>=$maximo_palabras) {
        $maximo_palabras = $variable;
        $maximo= $array1[$i];
    }
}

echo "La palabra mas corta és " . $minimo . " y tiene " . $minimo_palabras . " letras";
echo "</br>";
echo "La palabra mas larga és " . $maximo . " y tiene " . $maximo_palabras . " letras";
?>
