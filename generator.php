<?php
// Get number
function get_numbers() {
    $temp = [];
    
    for ($i = 1; $i <= 50; $i++) {
        $temp[] = $i;
    }
    
    return $temp;
}

$result = get_numbers();

foreach ($result as $value) {
    echo "$value";
}

function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

echo "<br>";

echo "\n\nMemory terpakai : " . convert(memory_get_usage());