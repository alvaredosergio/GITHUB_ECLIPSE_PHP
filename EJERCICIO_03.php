<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 3</title>
</head>
<body>

<?php
function ecPrimerGrado ($a,$b){
    if($a == 0){
        return "Infinito";
    }
    else{
        return -$b/$a;
    }
}

$a = "";
$b = "";
$result = "";

if (isset($_POST['primerGrado'])){
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $result = ecPrimerGrado($a,$b);
}

?>
    
    <form action="EJERCICIO_03.php" method="POST">
		Numero 1? <input type="text" name="num1" size="10" value="<?php echo $a;?>" />
		Numero 2? <input type="text" name="num2" size="10" value="<?php echo $b;?>" />
		Resultado: <input type="text" name="result" size="10" value="<?php echo $result;?>" disabled/>
		<input type="submit" value="Calcular" name="primerGrado" />
	</form>

</body>
</html>