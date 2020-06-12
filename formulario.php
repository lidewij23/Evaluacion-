<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="resultado.php" method ="POST">
            <h5>Formulario</h5>
            <hr>
            <div class="form-group">
                <label for="">Id</label>
                <input type="text" name="ID" class="form-control" size="40" placeholder="Ingrese ID">
            </div>

            <div class="form-group">
                <label for="">Descripcion</label>
                <input type="text" name="Descripcion" class="form-control" size="40" placeholder="Ingrese Descripcion">
            </div>

            <div class="form-group">
                <label for="">Cantidad</label>
                <input type="text" name="Cantidad" class="form-control" size="40" placeholder="Ingrese Cantidad">
            </div>

            <div class="form-group">
                <label for="">Precio</label>
                <input type="text" name="Precio" class="form-control" size="40" placeholder="Ingrese Precio">
            </div>

            <div class="form-group">
                <label for="">Descuento</label>
                <input type="text" name="Descuento" class="form-control" size="40" placeholder="Ingrese Descuento">
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="confirmar">
            </div>
            <br>
        </form>
    </div>
</body>

</html>