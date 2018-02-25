<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>
    <!-- Скрипт блокировки сервера -->
    <!-- Проверяем,находится ли в массиве $_REQUEST кнопка с заданным названием(нажата ли она) -->
    <!-- Если да, то проверяем правильность данных, и выдаем текст, если нет, то оставляем форму -->
    <?php if (!isset($_REQUEST['doGo'])) {?>
    <!-- конструкция <?= выражение ?> более короткая замена <?php echo выражение ?> -->
    <form method="post" action="<?=$_SERVER['SCRIPT_NAME']?>">
        <input type="text" name="username">
        <input type="password" name="password">
        <button type="submit" name="doGo">Enter</button>
    </form>
    <?php } else {
            if($_REQUEST['username']) {
        if($_REQUEST['username'] == "root" && $_REQUEST['password'] == "123") {
            echo "Добро пожаловать, пользователь {$_REQUEST['username']}";
            
        }
        else {
            echo "Доступ закрыт!";
        }
        }
        else {
            echo "Введите данные в форму!";
        }  
}?>
    <?php
                //квадраты и кубы первых $number чисел
        function squareCube($number) {
        echo "А вот квадраты и кубы первых $number чисел<br>";
        echo "<ul>";
        for($i = 0; $i < $number; $i++) {
            echo "<li>$i в квадрате = ".($i*$i);
            echo " $i в кубе = ". ($i*$i*$i)."</li>\n";
        }
        echo "</ul>";
        }
        //сумма чисел в строке
        function sumIntInString($string){
             $sum = 0;//strlen  - Длина строки
            for($i = 0; $i < strlen($string); $i++) {
                $sum += $string[$i];
            }
            return $sum;
        }
            
        //количество вхождений какой-нибудь цифры в строчке
        function numberCounter($string, $number) {
            $counter = 0;
                for($i = 0; $i < strlen($string); $i++) {
                    if($string[$i] == $number) $counter++;
                    else continue;
                }
            return $counter;
        };    
    ?>  
        
    </body>