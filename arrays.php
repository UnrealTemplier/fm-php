<?php

$list = array(1, 2, 3, 4, 5);
$countries = ["ar"=>"Argentina", "Brazil", 3=>"Denmark", "Russia"];

for ($i=0; $i < count($list); $i++) {
    echo $list[$i] . "\n";
}

echo "\n";

foreach ($countries as $country) {
    echo $country . "\n";
}

echo "\n";

foreach ($countries as $id => $country) {
    echo "$id: $country\n";
}