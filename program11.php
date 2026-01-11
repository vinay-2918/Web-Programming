<?php
$rows = 5;

for ($i = $rows; $i >= 1; $i--) {

    // spaces
    for ($s = 0; $s < $rows - $i; $s++) {
        echo "&nbsp;&nbsp;";
    }

    // stars
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }

    echo "<br>";
}
?>
