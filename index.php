<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="index.php" method="post">
    <input type="submit" value="Выбрать соперников" name="generate">
</form>
<?php
$array = [
    0 => 'Король Артур',
    1 => 'Алиса в стране чудес',
    2 => 'Синдбад-мореход',
    3 => 'Медуза Горгона',
    4 => 'Робин Гуд',
    5 => 'Бигфут',
    6 => 'Человек-невидимка',
    7 => 'Дракула',
    8 => 'Шерлок Холмс',
    9 => 'Доктор Джекилл и мистер Хайд',
    10 => 'Малдун',
    11 => 'Рапторы',
    12 => 'T-Rex',
    13 => 'Доктор Сеттлер',
    14 => 'Беовульф',
    15 => 'Красная шапочка'
];

if (!empty($_POST['generate'])): ?>
    <?php
    $firstId = rand(0, count($array));
    $first = $array[$firstId];
    unset($array[$firstId]);
    $secondId = rand(0, count($array));
    $second = $array[$secondId];
    ?>
    <?= $first . ' vs ' . $second ?>
<?php endif; ?>
</body>
</html>
