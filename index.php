<?php
/**
 * Created by PhpStorm.
 * User: moof
 * Date: 7/8/17
 * Time: 6:44 PM
 */

$numArr = [];
$count = true;

for ($i = 1; $i < 100; $i++) {

    for ($k = 2; $k < $i; $k++) {
        if ($i % $k == 0) {
            $count = false;
            break;
        }

    }
    if ($count && $i !== 1) {
        array_push($numArr, $i . " ");

    }
    $count = true;
}

?>

<!DOCTYPE html>

<html>
<head>
    <title>Numbers</title>
</head>
<body>
<p>Simple numbers <100</p>

<p><?php foreach ($numArr as $item) {
        echo $item;
    } ?>
</p>
</body>
</html>
