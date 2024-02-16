<?php
$dayOfWeek = date('l');

switch ($dayOfWeek) {
  case 'Monday':
    $message = 'Monday blues';
    $color = 'blue';
    break;
  case 'Tuesday':
    $message = 'At least it\' not Monday';
    $color = 'purple';
    break;
  case 'Wednesday':
    $message = 'Hump day';
    $color = 'orange';
    break;
  case 'Thursday':
    $message = 'One more day to  Friday!';
    $color = 'red';
    break;
  case 'Friday':
    $message = 'Friday finally!';
    $color = 'magenta';
    break;
  case 'Saturday':
    $message = 'Weekend!!';
    $color = 'pink';
    break;
  case 'Sunday':
    $message = 'Weekend almost over';
    $color = 'green';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>