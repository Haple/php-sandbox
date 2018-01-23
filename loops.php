<?php

    $users = array(
        array('name' => 'Aleph', 'age' => 17, 'medications' => array('AS', 'Tandrilax')),
        array('name' => 'Pooja', 'age' => 19, 'medications' => array('AS', 'Asparaginase', 'Buscopan'))
    );

    for ($number=0; $number < 10; $number++) { 
        echo($number . '<br>');
    }

    foreach ($users as $user) {
        echo("User: " . $user['name'] . ' - ' . $user['age'] . '<br>');
    }

?>