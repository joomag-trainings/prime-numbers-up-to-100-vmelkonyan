<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/8/17
 * Time: 6:44 PM
 */

$numArr = [];


for ($i = 1; $i < 100; $i++) {
    for ($k = 2; $k < $i; $k++) {
        if ($i % $k == 0) {
            continue 2;
        }
    }

    if ($i !== 1) {
        array_push($numArr, $i . " ");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Numbers</title>
</head>
    <body>
    <p>Simple numbers &lt100</p>
    <p>
        <?php foreach ($numArr as $item) {
            echo $item;
        } ?>
    </p>
    </body>
</html>
