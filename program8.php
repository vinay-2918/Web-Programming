<!DOCTYPE html>
<html>
<head>
<title>Color Change By Day</title>
</head>

<?php
$days = array(
    "Sunday" => "#FF5733",
    "Monday" => "#33FF57",
    "Tuesday" => "#3357FF",
    "Wednesday" => "#FFFF33",
    "Thursday" => "#FF33FF",
    "Friday" => "#33FFFF",
    "Saturday" => "#FF3333"
);

$day = date("l");
$bg = $days[$day];
?>

<body style="background-color: <?php echo $bg; ?>;">
<h1>Welcome! Today is <?php echo $day; ?></h1>
</body>
</html>
