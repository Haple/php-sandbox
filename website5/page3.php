<?php

    $user = ['name' => 'Pooja', 'email' => 'pooja@dell.com.br', 'age' => '21'];

    $user = serialize($user);

    setcookie('user', $user, time()+(86400 * 30));

    $user = unserialize( $_COOKIE['user']);

    echo $user['email'];
?>