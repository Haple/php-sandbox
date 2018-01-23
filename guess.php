<?php   

    define('GUESS', $_GET['guess']);

    $random_number = rand(0,5);

    $json_answer = array();
  
    if (GUESS == $random_number) $json_answer['result'] = true;
    else $json_answer['result'] = false;
    
    $json_answer['answer'] = $random_number;

    echo(json_encode($json_answer));
    
?>