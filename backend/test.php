<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = "I am a very good man";

 
$result = shell_exec("/opt/lampp/htdocs/ai-mini-project-cat-pl/venv/bin/python /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/main.py '$text'  2>&1");
echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" c initial-scale=1.0>
    <title>Test</title>
</head>
<body>

    <h1>Result</h1>
    <p><?php echo $result; ?></p>
    
    
</body>
</html>