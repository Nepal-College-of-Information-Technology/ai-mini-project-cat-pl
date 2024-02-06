<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = "I am a very good man";

 
shell_exec("/opt/lampp/htdocs/ai-mini-project-cat-pl/venv/bin/python /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/main.py '$text' > /opt/lampp/htdocs/ai-mini-project-cat-pl/backend/output.txt 2>&1");


// read file output.txt

$myfile = fopen("/opt/lampp/htdocs/ai-mini-project-cat-pl/backend/output.txt", "r") or die("Unable to open file!");
$var = fread($myfile,filesize("/opt/lampp/htdocs/ai-mini-project-cat-pl/backend/output.txt"));
fclose($myfile);


$result = $var;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" c initial-scale=1.0>
    <title>Document</title>
</head>
<body>

    <h1>Result</h1>
    <p><?php echo $result; ?></p>
    
    
</body>
</html>