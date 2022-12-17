<?php

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $text = $fname . " " . $lname . " " . $email;
    $i = 1;
    while(file_exists("$i.txt")) {
        $i = $i + 1;
    }
    $file = fopen("$i.txt","w");
    fwrite($file, $text);
    fclose($file);
?>