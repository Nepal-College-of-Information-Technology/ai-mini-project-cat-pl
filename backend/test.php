<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = 'I am a man';

$var = shell_exec("/opt/lampp/htdocs/ai-mini-project-cat-pl/venv/bin/python /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/score.py '$text'");

echo $var;

$result = $var;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="result">
        <?php echo $result; ?>
    </h1>
</body>
</html>