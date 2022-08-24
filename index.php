<?php 
include("main.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reto02 | case02</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
<div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="container__form" method="post">
        <div class="container__form-result-base">
            <h3 class="container__form-result-title">Parametros ingresados:</h3>
            <p class="container__form-base"><?php echo "Nombre : ".$name.'<br>'?></p>
            <p class="container__form-base"><?php echo "Precio base : ".$price.'<br>'; ?></p>
            <p class="container__form-base"><?php echo "Tu descuento aplicado = ".$discount."%"; ?></p>
        </div>
            <input type="text" name="name" id="name"  placeholder="Nombre" class="container__form-name"> 
            <input type="number" name="price" id="price" placeholder="$Precio" class="container__form-price"> 
            <input type="number" name="discount" id="discount" placeholder="%Ingresa tu descuento" class="container__form-discount"> 
            <button type="submit" name="btn" class="container__form-btn">¡Calcular!</button>
            <div class="container__form-result-ingre">
                <p class="container__form-saludo"><?php echo "Hola ".$name."<br>"; ?> </p>
                <p class="container__form-desc"><?php echo "Tu descuento es del : $".$descuentoTotal;  ?></p>
                <p class="container__form-desc"><?php echo "Total a pagar : $".$rebajatoTotal;  ?></p>
                <!-- <p class="container__form-desc"><?php echo "este es tu precio base : $".$precioBase;  ?></p> -->
            </div>
        </form>
</div>

</body>
</html>