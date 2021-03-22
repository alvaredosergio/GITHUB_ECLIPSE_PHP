<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 5</title>
</head>
<body>

<?php

function simplificarFraccion($numerador,$denominador,$divisor){
    while($divisor <= $numerador && $divisor <= $denominador){
        while(($numerador % $divisor) == 0 && ($denominador % $divisor) == 0){
            $numerador = $numerador / $divisor;
            $denominador = $denominador / $divisor;
        }
        $divisor++;
    }
    return $numerador."/".$denominador;
}

$numerador = "";
$denominador = "";
$divisor = 2;
$resultado = "";

if (isset($_POST['simplificar'])){
    $numerador = $_POST['numerador'];
    $denominador = $_POST['denominador'];

    $resultado = simplificarFraccion($numerador,$denominador,$divisor);
}

?>
 
    <form action="EJERCICIO_05.php" method="POST">
		Ingrese el Numerador de la fraccion = <input type="text" name="numerador" size="10" value="<?php echo $numerador;?>"</input><br>
		Ingrese el Denominador de la fraccion = <input type="text" name="denominador" size="10" value="<?php echo $denominador;?>"</input><br>
		Resultado: <input type="text" name="resultado" size="10" value="<?php echo $resultado;?>" disabled /><br>
		<input type="submit" value="Calcular" name="simplificar" />
	</form>

</body>
</html>