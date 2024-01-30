<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = 'I am a good man';

$var = shell_exec("/opt/lampp/htdocs/ai-mini-project-cat-pl/venv/bin/python /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/score.py '$text'");

echo $var;
?>
