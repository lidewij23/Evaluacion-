<?php 

$id;
$descripcion;
$cantidad;
$precio;
$descuento;
$valorTotal;
if($_POST){
    $id = $_POST['ID'];
    $descripcion = $_POST['Descripcion'];
    $cantidad = $_POST['Cantidad'];
    $precio = $_POST['Precio'];
    $descuento = $_POST['Descuento'];
    $valorTotal = calcularTotal($cantidad, $precio,$descuento);
}

function calcularTotal($cantidad, $precio,$descuento)
{
    $resultado = ($cantidad * $precio) - ($cantidad * $precio) * $descuento;
    return $resultado;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css?v=2">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <h5>Resultado</h5>
            <hr>
            <table border="1">
                <head>
                    <th>Id</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Descuento</th>
                    <th>Total a Pagar</th>
                </head>
                <tbody>
                    <td><?php echo $id ?></td>
                    <td><?php echo $descripcion ?></td>
                    <td><?php echo $cantidad ?></td>
                    <td><?php echo $precio ?></td>
                    <td><?php echo $descuento ?></td>
                    <td><?php echo $valorTotal ?></td>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>