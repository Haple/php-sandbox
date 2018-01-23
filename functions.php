<?php

    function square(&$number)
    {
        $number *= $number;
    }

    $NUMBER = $_GET['number'];

    square($NUMBER);

    echo($NUMBER);
?>