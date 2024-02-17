<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

 
$result = shell_exec("/opt/lampp/htdocs/ai-mini-project-cat-pl/venv/bin/python /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/helloworld.py 2>&1");
echo $result;
?>
