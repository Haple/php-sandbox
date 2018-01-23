<?php

header('Content-Type: text/html; charset=utf-8');
/*
if (3.14 >= 10/3) {
    echo ("Greater or equal");
} else {
    echo ("Less than");
}
*/

switch ($_GET['number']) {
    case '0':
        echo "You even know how to read";
        break;
    case '1000':
        echo "You are a little old...";
        break;    

    
    default:
        echo ("['-']/___________|______°____\['-']");
        break;
}


?>