<!DOCTYPE html>
<html>

<head>
    <!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ввод данных о себе</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Ввод данных о себе</h1>

    <script>
        var surname = prompt("Введите вашу фамилию:");
        var name = prompt("Введите ваше имя:");
        var patronymic = prompt("Введите ваше отчество:");
        var birthDate = prompt("Введите дату рождения:");
        var birthPlace = prompt("Введите место рождения:");
        var height = prompt("Введите ваш рост:");
        var weight = prompt("Введите ваш вес:");

    </script>

    <?php

        $surname = "<script>document.write(surname)</script>";
        $name = "<script>document.write(name)</script>";
        $patronymic = "<script>document.write(patronymic)</script>";
        $birthDate = "<script>document.write(birthDate)</script>";
        $birthPlace = "<script>document.write(birthPlace)</script>";
        $height = "<script>document.write(height)</script>";
        $weight = "<script>document.write(weight)</script>";
        echo "
        <table>
        <tr>
            <th>Фамилия</th>
            <td>$surname</td>
        </tr>
        <tr>
            <th>Имя</th>
            <td>$name</td>
        </tr>
        <tr>
            <th>Отчество</th>
            <td>$patronymic</td>
        </tr>
        <tr>
            <th>Дата рождения</th>
            <td>$birthDate</td>
        </tr>
        <tr>
            <th>Место рождения</th>
            <td>$birthPlace</td>
        </tr>
        <tr>
            <th>Аватар</th>
            <td><img src= 'i.jpeg' HEIGHT=200 WIDTH=200></td> 
        </tr>
        <tr>
            <th>Рост</th>
            <td>$height</td>
        </tr>
        <tr>
            <th>Вес</th>
            <td>$weight</td>
        </tr>
    </table>
        ";
    ?>

</body>

</html> 