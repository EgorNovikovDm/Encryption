<?php
$string = $_POST['string'];//Значение переменной string
$string_lower = strtolower($string);//переводим всё в нижний регистр
$assoc_array_en = array(
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
" "=>" ");// массив азбуки морзе
for($i=0;$i<strlen($string_lower);$i++){// цикл
foreach($assoc_array_en as $letter => $code){// цикл массива
if($letter == $string_lower[$i]){// срваниваем ключь массива $assoc_array_en и значение массива string_lower;
echo .$letter.$code.' ';// результат
break;
}
}
}



?>
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
