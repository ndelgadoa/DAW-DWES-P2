<?php
function ordernar($vector, $clave, $orden)
{
    foreach ($vector as $num => $posicion) {
        echo $num . "=" . $posicion;
        echo "</br>";

        echo "</br>";
    }
    if ($clave == "valor" && $orden == "asc") {
        ksort($vector);
        foreach ($vector as $num => $posicion) {
            echo $num;
            echo "</br>";
        }
    } else if ($clave == "valor" && $orden == "desc") {
        krsort($vector);
        foreach ($vector as $num => $posicion) {
            echo $num;
            echo "</br>";
        }

    } else if ($clave == "clave" && $orden == "asc") {
        ksort($vector);
        foreach ($vector as $num => $posicion) {
            echo $posicion;
            echo "</br>";

        }

    } else if ($clave == "clave" && $orden == "desc") {
        krsort($vector);
        foreach ($vector as $num => $posicion) {
            echo $posicion;
            echo "</br>";


        }
    }else {
        echo "No has puesto correctamente los valores";
    }
}
ordernar([1=>"primero",3=>"tercero",2=>"segundo",5=>"quinto",4=>"cuarto"],"valor","asc");

?>

