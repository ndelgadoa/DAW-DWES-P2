<!DOCTYPE html>
<html>
<head>
    <tittle>EX 2</tittle>
</head>
<body>
<h1>Amigos</h1>
<ul>

    <?php
    // Your code here!

    $amigos = array('nil','ramon','alex','juan','sergio');
    $numero =0;

    foreach ($amigos as $numero =>$nombre) {
        echo '<li>' . $nombre  . '</li>';
    }
    echo '</br>';
    echo 'Número totales   ' . count($amigos);
    ?>
</ul>
</body>

</html>

