<?php

function roll ($sides){
    return mt_rand(1,$sides);
}

echo roll(50).'<br>';
echo roll(100).'<br>';
echo roll(1000).'<br>';
echo roll(10000).'<br>';
echo roll(1000000).'<br>';

?>