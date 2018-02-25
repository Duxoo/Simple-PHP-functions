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
    
    $good = ["a", "b", "c"];
    $bad = ["d", "e"];
    $ugly = ["f"];
    //слияние списоков. выведет a,b,c. Потому что при слиянии массивов с одинаковыми индексами
    // в результирующем массиве будет элемент,индекс которого был в первом массиве
    $all = $good + $bad + $ugly;
    //print_r() выводит информацию о переменной в удобочитаемом виде
    print_r($all);
    //многомерный массив
    $dosier = [
        ["name" => "Andrew", "born" => 1998],
        ["name" => "Ivan", "born" => 1999]
    ];
    //косвенный перебор элементов.{} нужны для того, чтобы не было ошибки
    function sortOutInderectly($array) {
    for($i = 0; $i < count($array); $i++) {
        echo "Имя {$array[$i]['name']}";
        echo "Родился {$array[$i]['born']}<br>";
    }
    }
    //ассоциативный массив
    $color = [
        "red" => 1,
        "green" => 2,
        "blue" => 3,
    ];
        //косвенный перебор ассоциативного массива.reset возвращает значение первого элемента массива.
        //key возвращает ключ. next - значение элемента,следущего за текущим
    function sortOutInderectlyAss($array) {
        for(reset($array);($k = key($array)); next($array)) {
            echo "Цвет $k имеет код {$array[$k]} <br>";
        }
    }
        //перебор массива с конца
    function sortOutInderectlyBackward($array) {
        for(end($array);($k = key($array)); prev($array)) {
            echo "Цвет $k имеет код {$array[$k]} <br>";
        }
    }
        //прямой перебор ассоциативноо массива
    function sortOutDerectly($array) {
        foreach($array as $k => $v) {
            echo"Цвет $k имеет код $v <br>";
        }
    }
    ?>  
        
    </body>