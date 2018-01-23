<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <title>Server Information</title>
</head>
<body>
    <?php if($server): ?>
        <ul class="collection with-header">
            <li class="collection-header"><h4>Server & File Info</h4></li>
            <?php foreach($server as $key => $value): ?>
                <li class="collection-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach;?>    
        </ul>
    <?php endif; ?>  

    <?php if($client): ?>
        <ul class="collection with-header">
            <li class="collection-header"><h4>Client Info</h4></li>
            <?php foreach($client as $key => $value): ?>
                <li class="collection-item">
                    <strong><?php echo $key; ?>: </strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach;?>    
        </ul>
    <?php endif; ?>  
</body>
</html>