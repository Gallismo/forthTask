<?php
$array = [];
for ($i = 1; $i <=100; $i++) {
    $array[] = mt_rand(1, 20);
}
foreach ($array as $item) {
    echo $item." ";
}
echo "<br/>";
$tmp = 0;
$count = 0;
foreach ($array as $item) {
    if ($tmp==0) {
        $tmp = $item;
        continue;
    }
    if ($item == $tmp){
        $count++;
        echo "<br/>".$item."=".$tmp;
    }
    $tmp = $item;
}
echo("<br/>Count = ".$count);