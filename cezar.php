<?php 

        if(isset($_POST['but']))//проверяет нажата ли кноппка со значением but
        {
           
         $K=$_POST['k'];//присваивает переменной k значение инпутка k
$X=strtoupper($_POST['text']);//переводит текст в верхний регистр
$alph=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');//массив алфавита
$num = range(0, 9);//массив цифрж
$N=count($alph);//присваивает значение N равная длине массива alph
$D = count($num);//переменной D присваивает значение равной длинне массива num
$n=strlen($X);//возврощает длину X;
 //циклы 
for($i=0;$i<$n;$i++)
for($j=0;$j<$N;$j++){
//цикл сравнения элементов массива
if($X[$i]==$alph[$j]) {
$b= $b . $alph[ ($j+$K) % $N];// присвоение значений переменной b


		}
	}
}

if(isset($_POST['but2']))//проверяет форму со значение but2
{    
 $name=$_POST['text'];//значение текст
    $num=$_POST['k'];//сдвиг
 
    if(preg_match ('@[A-z]@u',$name) and preg_match ('/[0-9]/',$num))//выполняем проверку регулярному выражению
         {
         
            $X=strtoupper($_POST['text']); //Преобразует строку в верхний регистр
            $alph=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');//массив алфавита
            $N=count($alph);//Считает кол-во букв
            $n=strlen($X); //Возвращает длину строки
            //циклы;
            for($i=0;$i<$n;$i++)
            for($j=0;$j<$N;$j++)
            {
            if($X[$i]==$alph[$j])//сравниваем значение массивов
                {
                	$d = $j-$num;//вычитаем из j сдвиг 
                	if($d < 0){// проверяем больше ли оно нуля
                		$c = ($j-$num)+$N;//находим чему раняется этот элемент с конца
                		 $b= $b . $alph[ ($c) % $N];// присваиваем переменной
                
                	}else{
                		$d = $j-$num;//вычитаем из j сдвиг
                $b= $b . $alph[ ($d) % $N];// присваиваем b результат
                }
                }
            }
      
           }
}
print "Result: ".$b ;//ответ
 

?>
<!-- Кнопка -->
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cezar</title>
</head>
<body>
	<form action="index.php" method="post">
		<button type="submit" >Главная</button>
	</form>
</body>
</html>