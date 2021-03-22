<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 4</title>
</head>
<body>

<?php
function ecSegundoGrado($a, $b, $c){
    $det = $b * $b - (4 * $a * $c);
    
    if($det >= 0){
        if($a != 0){
            $sol1 = (-$b + sqrt($det)) / 2 * $a;
            $sol2 = (-$b - sqrt($det)) / 2 * $a;
            return $sol1.", ".$sol2;
        }
        else{
            return "Infinito.";
        }
    }
    else{
        return "Solucion imaginaria.";
    }
}

$a = "";
$b = "";
$c = "";
$resultado = "";

if (isset($_POST['segundoGrado'])){
    $a = $_POST['v1'];
    $b = $_POST['v2'];
    $c = $_POST['v3'];
    $resultado = ecSegundoGrado($a,$b,$c);
}


?>
    
    <form action="EJERCICIO_04.php" method="POST">
		Valor 1? <input type="text" name="v1" size="10" value="<?php echo $a;?>" />
		Valor 2? <input type="text" name="v2" size="10" value="<?php echo $b;?>" />
		Valor 3? <input type="text" name="v3" size="10" value="<?php echo $b;?>" />
		Resultado: <input type="text" name="resultado" size="10" value="<?php echo $resultado;?>" disabled/>
		<input type="submit" value="Calcular" name="segundoGrado" />
	</form>

</body>
</html>
