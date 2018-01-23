<?php

    setcookie('username', "Donald", time()+(86400 * 30)); // a month

    echo count($_COOKIE['username']) > 0 ? "There are " . count($_COOKIE['username']) . " cookies saved" : "There is no cookie here";

    if (isset($_COOKIE['username'])) {
        echo "<br>User " . $_COOKIE['username'] . " is set<br>";
    } else {
        echo "User is not set";
    }

?>