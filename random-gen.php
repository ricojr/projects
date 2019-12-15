

<?php


$male = explode("\n",file_get_contents('names.males.txt'));
$female = explode("\n", file_get_contents('names.females.txt'));
$last = explode("\n",file_get_contents('names.last.txt'));

 shuffle($male);
 
 shuffle($female);
 shuffle($last);
for ($i = 0; $i <= 5; $i++) {
    echo $male[$i] . ' ' . $last[$i] . "<br />\n";
    echo $female[$i] . ' ' . $last[$i] . "<br />\n";
// echo $male[array_rand($male)] . ' ' . $last[array_rand($last)];
}

?>