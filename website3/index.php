<?php
    $msg = '';
    $msg_class = '';

    if (filter_has_var(INPUT_POST, 'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (!empty($name) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = "Please, use a valid e-mail";
                $msg_class = "alert-danger";
            } else {
                # E-mail template
                $toEmail = "aleph_santos_@hotmail.com";
                $subject = "Contact request from " . $name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>' . $name . '</p>
                        <h4>E-mail</h4><p>' . $email .'</p>
                        <h4>Message</h4><p>' . $message . '</p>';

                $headers = "MIME-Version: 1.0" . "\r\n";        
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";        
                $headers .= "From: $name<$email>" . "\r\n";        
                
                if (mail($toEmail, $subject, $body, $headers)) {
                    $msg = "Your email has been sent";
                    $msg_class = "alert-success";
                } else {
                    $msg = "Your email was not sent";
                    $msg_class = "alert-danger";
                }
                

            }
            
        } else {
            $msg = 'Please, fill in all fields!';
            $msg_class = 'alert-danger';
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>

    <!--Navbar-->
    <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            </ul>
        </div>
    </nav>



    <!--Contact Form-->
    <?php if($msg != ''):?>
        <div class="alert <?php echo $msg_class; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif;?>    
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <fieldset>

                <div class="form-group">
                    <label>Name</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Ex: Cersei Lannister" 
                        name="name" 
                        value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Ex: cersei@lannister.queen" 
                        name="email" 
                        value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea 
                        class="form-control" 
                        name="message" 
                        rows="3"
                        value="<?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </fieldset>
        </form>
    </div>

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>