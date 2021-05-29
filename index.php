<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кодирование информации</title>
	<style>
		h1{color:#00008B; margin-left:10px;}
	</style>
</head>
<body>
	<h1>Перевод в азбуку морзе</h1>
	<form action="morse.php" method="post">
		<input style="width: 400px; height: 100px;margin-bottom: 10px;margin-left:10px;" type="text" name = 'string' placeholder="текст "> <p style="margin-left:10px;color:red;">(текст только английский)</p><br/>
		<input style="margin-left:10px;"type="submit" />
       
	</form>
	<h1>Перевод из азбуки морзе</h1>
	<form action="decoding.php" method="post">
		<input style="width: 400px; height: 100px;margin-bottom: 10px;margin-left:10px;" type="text" name = 'morse2' placeholder="текст"><p style="margin-left:10px;color:red;">(текст только английский)</p><br/>
		<input style="margin-left:10px;"type="submit" />
	</form>
	<H1 >Введите слово, для шифрования/дешифрования</H1>
	<form action="cezar.php" method="post">
 			<form action='index.php' method='POST'>
            <input style="width: 400px; height: 100px;margin-bottom: 10px;margin-left:10px;" type='text' name='text' placeholder="текст"><br/>
            <input style="width: 40px; height: 20px;margin-bottom: 10px;margin-left:10px; "type='text' name='k' placeholder="сдвиг"><p style="margin-left:10px;color:red;">(текст только английский)</p>
            <input type='Submit' value='Зашифровать' name='but'>
            <input type='Submit' value='Расшифровать' name='but2'>
        </form>   
        <h1>Перестановка</h1>
        <form action="Permutations.php" method="post">
            <form action='index.php' method='POST'>
            <input style ="width: 400px; height: 100px;margin-bottom: 10px;margin-left:10px;" type='text' name='TEXT' placeholder="текст 	">
            <p style="margin-left:10px;color:red;">(текст только английский)</p><br/>
            <input style="margin-left:10px;" type='Submit' value='Зашифровать' name='but'>
        </form>   
            
     
</body>
</html> 


