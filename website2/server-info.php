<?php

    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME'],
        'Host Header' => $_SERVER['HTTP_HOST']
    ];
/*
    echo "Host Server Name: " . $server['Host Server Name'] . "<br>";
    echo "Host Header: " . $server['Host Header'] . "<br>";
    echo "Server Software: " . $server['Server Software'] . "<br>";
    echo "Document Root: " . $server['Document Root'] . "<br>";
    echo "Current Page: " . $server['Current Page'] . "<br>";
    echo "Script Name: " . $server['Script Name'] . "<br>";
    echo "Absolute Path: " . $server['Absolute Path'] . "<br><hr>";
*/
    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],        
        'Remote Port' => $_SERVER['REMOTE_PORT'],        
        'Client IP' => $_SERVER['REMOTE_ADDR']        
    ];
/*
    echo "Client System info: " . $client['Client System info'] . "<br>";
    echo "Client IP: " . $client['Client IP'] . "<br>";
    echo "Remote Port: " . $client['Remote Port'] . "<br>";
*/    

?>