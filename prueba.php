<?php 

$array = [
    "pjrf_nombre_razon_social" => ["qweqw", "weqweq"],
    "pjrf_actividad" => ["qweqwe", "weqweq"],
    "pjrf_relacion" => ["qweqweqw", "weqweqwe"],
    "pjrf_telefono" => ["eqweqwe", "qweqweqw"],
    "pjrf_correo_electronico" => ["qweqweq", "eqwewe"]
];

$newArrays = [];

foreach($array as $key => $subArray) {
    foreach($subArray as $index => $value) {
        $newArrays[$index][$key] = $value;
    }
}
foreach ($newArrays as $key => $value) {
    echo '<pre>';
    var_dump($newArrays[$key]);
    echo '</pre>';
    // aui va la insercion de la base de datos 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:gray;">
    
</body>
</html>