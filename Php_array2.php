<?php

$score = [101, '+', 102, '+', 103, '+', 104, '+', 105, '+', 106];
$sum = 0;
for ($i = 0; $i < count($score); $i++) {
    if ($score[$i] != "+") {
        $sum += $score[$i];
    }
    echo $score[$i];}
echo "=" . $sum;
