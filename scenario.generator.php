<?php

$settings = explode("\n", file_get_contents('scenario.settings.txt'));
$objectives = explode("\n", file_get_contents('scenario.objectives.txt'));
$antagonists = explode("\n", file_get_contents('scenario.antagonists.txt'));
$complications = explode("\n", file_get_contents('scenario.complications.txt'));
var_dump($settings, $objectives, $antagonists, $complications);
shuffle($settings);
shuffle($objectives);
shuffle($antagonists);
shuffle($complications);

echo $settings[0] . '' . $objectives[0] . '' . $antagonists[0] . '' . $complications[0] . "<br />\n";