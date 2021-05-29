<?php 
$string = $_POST['TEXT'];// заносит значение переменной string
$sources    = str_split($string); //пушит строку в массив 
$n = count($sources);//длина массива sourse заноситьсы в перменную n
$sliceTo = 2;
$dest = array_map(function($i) use ($sources, $n, $sliceTo){//массив дест где примениться функция array_map для всех дементов указанных массивов
    return $sources[($n/$sliceTo)*($i%$sliceTo)+($i/$sliceTo)];//вернёт массив sources
}, array_keys($sources));// вернёт все ключи массива sources

foreach ($dest as $key => $value) {//цикл массива dest
	$res .= $value;//значение массива присваиваются переменной res
}
echo 'RESULT: '.$res;//результат

 ?>
 <!-- Кнопка -->
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Перестановка</title>
</head>
<body>
	<form action="index.php" method="post">
		<button type="submit" >Главная</button>
	</form>
</body>
</html>