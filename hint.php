<?php
// Your code here!
$body = "come waiting simultanous ";
$str = "b5Dup?4de1";
$len = strlen($body);
$body = strrev($body);
$part1 = substr($body,0,round($len/2));
$part2 = substr($body,round($len/2),$len);
// echo $body."\n";
// echo strrev($part1)."\n";
// echo strrev($part2)."\n";

// echo $part2.$part1;

$arr = str_split($str,2);
// echo $arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3]." ".$arr[4];

    $body = str_replace("a","{{".$arr[0]."}}",$body);
    $body = str_replace("A","{{".$arr[0]."cp}}",$body);
    $body = str_replace("e","{{".$arr[1]."}}",$body);
    $body = str_replace("E","{{".$arr[1]."cp}}",$body);
    $body = str_replace("i","{{".$arr[2]."}}",$body);
    $body = str_replace("I","{{".$arr[2]."cp}}",$body);
    $body = str_replace("o","{{".$arr[3]."}}",$body);
    $body = str_replace("O","{{".$arr[3]."cp}}",$body);
    $body = str_replace("u","{{".$arr[4]."}}",$body);
    $body = str_replace("U","{{".$arr[4]."cp}}",$body);
    $body = str_replace(" ","{{}}",$body);
echo $body;


?>
