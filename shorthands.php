<?php

    $auth = false;
    $users = array('Aleph', 'Pooja', 'Ellen');

    echo ($auth) ? "<h3>Welcome back!</h3>" : "<h3>You have to login first.</h3>";    

?>

<?php if($auth):?>
    <h1> Hi buddy! </h1>
<?php else:?> 
    <h1> Not authorized here! </h1>
<?php endif;?>     

<hr>
<ol>
    <?php foreach($users as $key => $user ):?>
        <li><strong><?php echo $user; ?></strong><li>
    <?php endforeach;?> 
</ol>