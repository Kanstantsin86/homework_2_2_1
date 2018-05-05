<?php

$test_dir = "./DownloadFiles/";
$test_id = $test_dir.$_GET["id"];
$json_file = file_get_contents($test_id);
$json_array = json_decode($json_file, true);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<a href="list.php">Список загруженных тестов</a>

<form action="" method="POST" enctype="multipart/form-data">

    <?php foreach ($json_array as $elem) { ?>
        <?php for ($i = 0; $i < count($elem); $i++){ ?>
        <fieldset>
            <h1><?php echo $json_array[$i]['question']?></h1>
            <?php foreach ($json_array[$i]['answers'] as $values) { ?>
           <?php for ($j = 0; $j < count($json_array[$i]['answers']); $j++){ ?>
            <label>
                <input type="radio" name="answer<?=$i;?>[]"> <?php echo $values; break;?>
                <input type="hidden" name="correct_answer<?=$i;?>[]">
            </label>
            <?php } ?>
            
        <?php } ?>
        </fieldset> 
        <?php }  break;?>
    <?php } ?>


<button type="submit">Результат</button>
</form>
</body>
</html>

<?php
//print_r($_POST['answer']);



$ot = 0;
$not = 0;
$ans = $_POST['answer<?=$i;?>'];
$corans = 'correct_answer<?=$i;?>';
foreach ($json_array as $elem) {
    for ($i = 0; $i < count($json_array); $i++) {
    if ($ans == $corans){
        $ot++;
    } else {
        $not++;
    }
} break;
}

?> 
    <p>Правильных ответов: <?php echo $ot; ?></p>
    <p>Неправильных ответов:<?php echo $not; ?></p>
