<?php
$s = 0;
echo 2 . "<br";
for ($a = 3; $a <= 150; $a++) {
    for ($r = 2; $r <= $a; $r++) {
        if ($a % $r == 0){
            $s++;
        }
    }
    if ($s==1)
        echo $a."<br>";
    $s = 0;
}