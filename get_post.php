<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo !isset($_GET['name']) || $_GET['name'] == "" || $_GET['name'] == null ? "Hey, bro!" : "Hey, ". $_GET['name'] . "!";?>
    </title>
</head>
<body>
    <form action="get_post.php" method="GET">
        <div>
            <label>What is your name, dude?</label>
            <input type="text" name="name">
        </div>
        <input type="submit" value="Send >>">
    </form>
    <hr>
    <?php

        if (!isset($_GET['name']) || $_GET['name'] == "" || $_GET['name'] == null) return;
        //if (!isset($_POST['name']) || $_POST['name'] == "" || $_POST['name'] == null) return;
        //if (!isset($_REQUEST['name']) || $_REQUEST['name'] == "" || $_REQUEST['name'] == null) return;

        $NAME = $_GET['name'];

        echo "Your name is $NAME?!<br>";
        echo "Hey Bro! My name is $NAME too!<br>";
        //echo $_SERVER['QUERY_STRING'];
    ?>

    Are we brothers??

    <?php echo "<a href='get_post.php?isBrother=yes&name=$NAME'>Sure, bro!</a>"; ?> |
    <?php echo "<a href='get_post.php?isBrother=no&name=$NAME'>Of course not, man!</a><hr>"; ?>
    
    <?php

        if (!isset($_GET['isBrother']) || $_GET['isBrother'] != "yes" && $_GET['isBrother'] != "no") return;

        if ($_GET['isBrother'] == "yes") echo "<br>Glad to know you, bro! :) <br>";
        elseif ($_GET['isBrother'] == "no") echo "<br>Keep calm, man! :D <br>";

    ?>

</body>
</html>