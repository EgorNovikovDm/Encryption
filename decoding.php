<?php
$words = $_POST['morse2'];// переменная wrods
$morsearr = explode(' ', $words);//заделяет массив при наличии пробела в предложении.
//print_r($morsearr);
$assoc_array = array(
    "a"=>".-",
    "b"=>"-...", 
    "c"=>"-.-.", 
    "d"=>"-..", 
    "e"=>".", 
    "f"=>"..-.", 
    "g"=>"--.", 
    "h"=>"....", 
    "i"=>"..", 
    "j"=>".---", 
    "k"=>"-.-", 
    "l"=>".-..", 
    "m"=>"--", 
    "n"=>"-.", 
    "o"=>"---", 
    "p"=>".--.", 
    "q"=>"--.-", 
    "r"=>".-.", 
    "s"=>"...", 
    "t"=>"-", 
    "u"=>"..-", 
    "v"=>"...-", 
    "w"=>".--", 
    "x"=>"-..-", 
    "y"=>"-.--", 
    "z"=>"--..", 
    "0"=>"-----",
    "1"=>".----", 
    "2"=>"..---", 
    "3"=>"...--", 
    "4"=>"....-", 
    "5"=>".....", 
    "6"=>"-....", 
    "7"=>"--...", 
    "8"=>"---..", 
    "9"=>"----.",
    "."=>".-.-.-",
    ","=>"--..--",
    "?"=>"..--..",
    "/"=>"-..-.",
    " "=>" ");//массив азбуки морзе 
if($words === '...---...'){//проверяет значение words
    echo 'Resulr: '.'SOS';// вывод при  совпадении
}
for($i = 0;$i < count($morsearr);$i++){// цикл 
    foreach ($assoc_array as $key => $value) {// цикл массива 
       if($value == $morsearr[$i] ){// проверяет значение массива asspc_array с элементом morsearr
        $d .=$key;//присваивает ключь массива перменной d
       
       }
    }
}
echo "Result: ".$d;// выводим результат
?>
<!-- Кнопка  -->
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<button type="submit" >Главная</button>
	</form>
</body>
</html>