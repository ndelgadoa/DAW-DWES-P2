<!DOCTYPE html>
<html>
<head>
    <h1>Bienvendo</h1>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            font-family: "Arial Black";

        }

    </style>
</head>
<body>
<p>
    <?php
    $numero =1;
    ?>
<table>
    <tr>
        <?php
        for ($numero; $numero <= 10; $numero++) {
            echo "<tr> 
            <td>$numero estamos en segundo de DAW
            </td>";
        }
        ?>

    </tr>
</table>


</p>
</body>
</html>
