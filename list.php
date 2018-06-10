<?php

$files = array_slice(scandir('./DownloadFiles/'), 2);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список загруженных тестов</title>
</head>
<body>
    <h1>Список загруженных тестов</h1>
<nav>
    <ul>
        <?php foreach ($files as $file) { ?>
        <!--?php for ($i = 0; $i < count($files); $i++){ ?-->
            <!--li><a href="test.php?id=<?=($i+1);?>">Тест: <?=$files[$i];?></a></li-->
            <li><a href="test.php?id=<?=$file;?>">Тест: <?=$file;?></a></li>
        <!--?php } ?-->
        <?php } ?>
    </ul>
    <a href="admin.php">Загрузить тест</a>
</nav>
