<?php
/* Check posted data
    if (filter_has_var(INPUT_POST, 'data')) {
        echo 'Data Found';
    } else{
        echo 'No Data';        
    }
*/

/*
    Filters:
    FILTER_VALIDATE_BOOLEAN
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_REGEXP
    FILTER_VALIDATE_URL

    FILTER_SANITIZE_EMAIL
    FILTER_SANITIZE_ENCODED
    FILTER_SANITIZE_NUMBER_FLOAT
    FILTER_SANITIZE_NUMBER_INT
    FILTER_SANITIZE_SPECIAL_CHARS
    FILTER_SANITIZE_STRING
    FILTER_SANITIZE_URL

*/
    $var = "Aleph";

    echo filter_var($var, FILTER_VALIDATE_INT) ? $var." is a number." : $var." is not a number!";

    echo "<br>";

    $date = "11/02/2000";

    echo filter_var($date, FILTER_SANITIZE_NUMBER_INT);

    echo "<hr>";

    $alert = '<script>alert(1)</script>';

    echo filter_var($alert, FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<hr>";

    $filters = array(
        'data' => FILTER_VALIDATE_EMAIL, 
        'data2' => array(
            'filter' => FILTER_VALIDATE_INT,
            'options' => array(
                'min_range' => 1,
                'max_range' => 100
            ) 
        ) 
    );

    print_r(filter_input_array(INPUT_POST, $filters));

    echo "<hr>";

    $user = array(
        'name' => "aleph santos oliveira", 
        'age' => "17",
        'email' => "aleph.oliveira@etec.sp.gov.br"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                'min_range' => 1,
                'max_range' => 150
            ) 
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($user, $filters));

    echo "<hr>";


    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        echo $email . "<br>";

        echo filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL) ? 'E-mail is valid' : 'E-mail is not valid!';

        echo "<hr>";

        echo filter_input(INPUT_POST, 'data2', FILTER_VALIDATE_INT) ? 'Valid number' : 'Invalid number';

    }
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=post>
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>