<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>thirdTask</title>

    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
            border: 3px solid black;
        }

        th,
        td {
            border: 1px solid grey;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    $Workers = array(
        1 => array("Сергей", 52000, "Старший программист", "9846541236", 1),
        2 => array("Алексей", 35000, "Уборщик", "9846541232", 1),
        3 => array("Максим", 100000, "Менеджер", "9846541233", 0),
    );
    echo "<table><tr>
    <th> ФИО </th>
    <th> ЗП </th>
    <th> Должность </th>
    <th> Телефон </th>
    <th> Работает удаленно </th>
    </tr>";
    echo "</tr>";
    foreach ($Workers as $workers) {
        echo "<tr>";
        foreach ($workers as $d => $v) {
            echo "<td>" . $v . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";


    $countY = 0;
    $countN = 0;
    foreach ($Workers as $workers => $d) {
        if ($d[4] == 0) {
            $countN++;
        } else {
            $countY++;
        }
    }
    $countN*=3;
    $countY*=3;

    echo "<table><tr>
    <th colspan=$countY> Работает удаленно </th>
    <th colspan=$countN> Работает в офисе </th>
    </tr>";

    echo "<tr>";
    foreach ($Workers as $workers => $d) {
        echo "<th colspan=3>". $d[0] . "</th>";
    }
    echo "</tr>";
    foreach ($Workers as $workers => $d) {
        echo "<td>". $d[1] ."</td>" ."<td>". $d[2] ."</td>" ."<td>".  $d[3] ."</td>";
    }
    echo "</table>";
    ?>

</body>

</html>