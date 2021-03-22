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
function numerosPrimos($n){
    $resultados = [];
    if($n >= 2){
        $c = 0;
        for($i = 2; $i <= $n; $i++){
            $divisor = 2;
            $bandera = 0;
            while($divisor < $i){
                if(($i % $divisor) == 0){
                    $bandera = 1;
                }
                $divisor++;
            }
            if($bandera == 0){
                $c++;
                array_push($resultados, $i);
            }            
        }
        return $resultados;
    }
    else{
        return "Por definicion, un numero primo es un numero natural mayor de uno y solamente es divisible por la unidad o por si mismo.<br>";
    }
}

$n = "";

if (isset($_POST['primos'])){
    $n = $_POST['numero1'];
    
    $resultados = numerosPrimos($n);
}

?>

<form action="EJERCICIO_06.php" method="POST">
		Rango de numeros PRIMOS de 1 a : <input type="text" name="numero1" size="10" value="<?php echo $n;?>"</input><br>
		
		<?php
		echo 'Resultado: <textarea rows="'.(count($resultados) + 1).'" cols="5">';
		
		if(gettype($resultados) == "array"){
		    foreach($resultados as $primo){
		        echo $primo."\r\n";
		    }
		}
		else{
		    echo $resultados;
		}
		?>
		
		</textarea><br>
		<input type="submit" value="Calcular" name="primos" />
</form>

</body>
</html>
