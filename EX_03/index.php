<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    p {
        border: 1px solid black;
        border-collapse: collapse;
    }

</style>
<p>
<?php
$paises = array(
        'ESP' => ['name' => 'España','code'=>'724'],
        'AND' => ['name'=> 'Andorra','code'=>'020'],
        'ARG' => ['name'=> 'Argentina','code'=>'032'],
        'FIN' => ['name'=> 'Finlandia','code'=>'246'],
        'FRA' => ['name'=> 'Francia','code'=>'250'],
        'GIB' => ['name'=> 'Gibraltar','code'=>'292'],
        'GIN' => ['name'=> 'Guinea','code'=>'324'],
        'SVK' => ['name'=> 'Eslovenia','code'=>'705'],
        'JPN' => ['name'=> 'Japon','code'=>'392'],
        'CHE' => ['name'=> 'Suiza','code'=>'756']);

foreach ($paises as $pais => ['name'=>$nombre, 'code'=>$code]) {

    echo 'El país ' . $nombre . ' utiliza el código alfa-3 '. $pais . ' con codigo numerico ' . $code .'<br>';


}




?>
</p>
</body>
</html>


