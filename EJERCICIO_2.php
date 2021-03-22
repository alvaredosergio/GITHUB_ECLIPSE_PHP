<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 2</title>
</head>
<body>

<?php

function factorial ($n) {
            if($n < 0){
                return 0;
            }
            else if($n > 1){
                return $n*factorial($n-1);
            }
        return 1;
        }
        
$n = "";
$resultado = "";
     
if (isset($_POST['calFactorial'])){
    $n = $_POST['valor1'];
    $resultado = factorial($n);
}     
    ?>
    
    <form action="EJERCICIO_2.php" method="POST">
		Valor 1? <input type="text" name="valor1" size="10" value="<?php echo $n;?>" />
		Resultado: <input type="text" name="result" size="10" value="<?php echo $resultado;?>" disabled/>
		<input type="submit" value="factorial" name="calFactorial" />
	</form>

</body>
</html>
