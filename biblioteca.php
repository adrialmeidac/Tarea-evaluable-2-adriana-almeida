<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
<?php

$libros = [
    "libro1" => [
        "titulo" => "PHP para Principiantes",
        "autor" => "Carlos Ruiz",
        "precio" => 19.99,
        "categoria" => "Desarrollo web"
    ],
    "libro2" => [
        "titulo" => "JavaScript Avanzado",
        "autor" => "Laura García",
        "precio" => 25.99,
        "categoria" => "Desarrollo web"
    ],
    "libro3" => [
        "titulo" => "Algoritmos en Python",
        "autor" => "Miguel Fernández",
        "precio" => 29.99,
        "categoria" => "Algoritmos"
    ]
];

 #filtrar los libros de la categoria "Desarrollo web"
 function filtrarLibrosxCategoria($libros){
    $filtrados= array_filter($libros, function($libro) {
        return $libro["categoria"] == "Desarrollo web";
    });
    
    return $filtrados;
}

 
#a los libros de Desarrollo web aplicadle un 15% de descuento
function descuentoLibros($libros){
$librosConDescuento= [];
        foreach ($libros as $libro) {
        if (($libro["categoria"]) && $libro["categoria"] === "Desarrollo web") {           
            $libro["precio"] = $libro["precio"] *= 0.85;
            $librosConDescuento[] = $libro; 
        }
    }

    return $librosConDescuento;
}
$librosDesarrolloWeb = filtrarLibrosxCategoria($libros);
$librosConDescuento = descuentoLibros($libros);
?>
<h1>BIBLIOTECA</h1>
<h2>Información de todos los libros</h2>
<table border="1" cellspacing="10" cellpadding="10">
    <tbody>
<thead>
    <tr>
        <th>Título</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>Categoría</th>
</thead>
</tbody>
        <?php foreach($libros as $libro): 
        ?>
        <tr>
        <td><?php echo $libro["titulo"]; ?></td>
        <td><?php echo $libro["autor"]; ?></td>
        <td><?php echo $libro["precio"];?></td>
        <td><?php echo $libro["categoria"]; ?></td>
    </tr>
        <?php endforeach; ?>
</table>


<h2>Libros de Categoría "Desarrollo Web"</h2>

<ul>
    <?php foreach($librosDesarrolloWeb as $libro): ?>
        <li><?php echo $libro["titulo"] . " , " . $libro["autor"]; ?></li>
    <?php endforeach; ?>
</ul>

<h2>Libros de Categoría "Desarrollo Web" con descuento</h2>

<ul>
   <?php foreach($librosConDescuento as $libro): ?>
        <li><?php echo $libro["titulo"] . " - " . $libro["autor"] . " : " . $libro["precio"]." euros "; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>