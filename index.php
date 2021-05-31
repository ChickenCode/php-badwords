<?php 

    $badword = $_GET["badword"];
    $string = "Non dire mai la parola " . $badword;
    echo $string;

    $replaced = str_replace($badword, "***", $string);

    echo $replaced;

    echo strlen($string);
?>