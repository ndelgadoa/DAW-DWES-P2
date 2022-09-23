<table style="margin: auto">

    <?php
    for ($columnas = 1; $columnas <= 8; $columnas++) {
        for ($filas = 1; $filas <= 8; $filas++) {
            if ($filas % 2 == 0) {
                $col = '#fff';
            } else {
                $col ='#000';
            }
            if ($columnas % 2 == 0) {
                if ($filas % 2 == 0) {
                    $col ='#000';
                } else {
                    $col = '#fff';
                }
            }

            echo "<td style='border:1px solid;height:40px;width:40px;background-color:".$col ."' >    </td>";

        }
            echo '</tr>';


    }
    ?>


</table>







