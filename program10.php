<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$sortedList = [1,1,2,2,3,3,4,5,5];
$unique = removeDuplicates($sortedList);

echo "Original List: ";
print_r($sortedList);

echo "<br>Unique List: ";
print_r($unique);
?>
