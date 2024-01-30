<?php

    $text = 'I am a very bad man'.

    $var = shell_exec("python3 backend/score.py '.$text'");
    
    echo $var;
?>