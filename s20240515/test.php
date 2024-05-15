<?php
$sum = 0;


for ($i = 1; $i <= 100; $i++) {
    $sum = $sum + $i;
    // $sum += $i;
}


$name = 'kai';
$mobile = '0911-111-111';
// 1
$result = "Hello" . $name . $mobile;

// 2
$result = "Hello $name $mobile";

// 3
$result = 'Hello $name $mobile';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>