<?php

$text = 'I am a bad man';


$var = shell_exec('python3 score.py ' . $text);

echo $var;
?>
