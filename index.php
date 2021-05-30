<?php 

    $badword = $_GET["badword"];
    $string = "Non dire mai la parola " . $badword;
    $replaced = str_replace($badword, "***", $string);
    echo $replaced;

?>