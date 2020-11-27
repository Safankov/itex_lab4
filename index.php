<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег table</title>
    <style>
        table {
            width: 25%; 
            background: white; /
            color: black; 
        }

        th {
            background: red;
            padding: 5px; 
        }

        td {
            background: yellow; 
            padding: 5px; 
        }
    </style>
</head>
<body>
<?php $array = [
    ['С. Кинг', 'Жребий', 477],
    ["А. Атеев", "Карты Люцифера", 451],
    ["Э. Райс", "Интервью с вампиром", 445],
    ["Г. Лавкрафт", "Дагон", 9]
];
?>
<table>
    <tr>
        <th>Автор</th>
        <th>Название</th>
        <th>Страницы</th>
    </tr>
    <?php
    for ($i = 0; $i <= 3; $i++) {
        echo "<tr>";
        for ($z = 0; $z < 3; $z++) {
            echo "<td>" . $array[$i][$z]. "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>