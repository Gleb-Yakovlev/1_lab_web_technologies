<!DOCTYPE html>
<html>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Разветвляющий алгоритм</title>

<head>

</head>

<body>
    <?php

    function printPer($per)
    {
        echo $per . '<br>';
    }

    $prim1[0] = "1.Проснулся и надо идти в университет";
    $prim1[1] = "Сегодня только лекции - остаться дома";
    $prim1[2] = "Сегодня лень идти - остаться дома";
    $prim1[3] = "Сегодня нет пар - остаться дома";

    $prim2[0] = "2.Ты кот ученый, который ходит по цепи кругом";
    $prim2[1] = "Идешь направо - песнь заводишь";
    $prim2[2] = "Идешь налево - сказку говоришь";
    $prim2[3] = "Сидишь - молчишь";

    $prim3[0] = "3.Квадратное уравнение";
    $prim3[1] = "Дискриминант меньше 0 - действительных решений нет";
    $prim3[2] = "Дискриминант равен 0 - одно решение";
    $prim3[3] = "Дискриминант больше 0 - два разных корня";
    function printArray($array)
    {
        for ($i = 0; $i < 4; $i++) {
            printPer($array[$i]);
        }
        echo "<br>";
    }

    echo "Вывод всех:". '<br>';
    printArray($prim1);
    printArray($prim2);
    printArray($prim3);

    echo "Вывод случайного примера:". '<br>';
    $a = rand(0,2);
    if ($a == 0) {
        printArray($prim1);
    }
    if ($a == 1) {
        printArray($prim2);
    }
    if ($a == 2) {
        printArray($prim3);
    }
    echo "Вывод случайного действия:". '<br>';
    $b = rand(1,3);
    if ($a == 0) {
        printPer($prim1[0]);
        printPer($prim1[$b]);
    }
    if ($a == 1) {
        printPer($prim2[0]);
        printPer($prim2[$b]);
    }
    if ($a == 2) {
        printPer($prim3[0]);
        printPer($prim3[$b]);
    }

    ?>
</body>

</html>