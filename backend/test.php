<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = "I am a bad coder.";

 
$result = shell_exec("python main.py '$text'");
echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document</title>
</head>
<body>

    <h1>Result is : <?php echo $result;?></h1>
    
</body>
</html>
