<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = "I am a man.";

 
$result = shell_exec("/opt/lampp/htdocs/ai-mini-project-cat-pl/venv/bin/python /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/main.py '$text'  2>&1");
echo $result;
?>
