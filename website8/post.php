<?php
    require('config/config.php');
    require('config/db.php');

    if (isset($_POST['delete'])) {
        $delete_id = mysqli_real_escape_string($data_connection, $_POST['delete_id']);

        $query = "DELETE FROM POSTS WHERE ID={$delete_id}";

        if (mysqli_query($data_connection, $query)) {
            header("Location: " . ROOT_URL . "");
        } else {
            echo "ERROR: " . mysqli_error($data_connection);
        }

    }

    $postId = mysqli_real_escape_string($data_connection, $_GET['id']);

    $query = "SELECT * FROM POSTS WHERE ID=$postId";

    $result = mysqli_query($data_connection, $query);

    $post = mysqli_fetch_assoc($result);

    //var_dump($posts);

    mysqli_free_result($result);

    mysqli_close($data_connection);

?>

<?php include 'inc/header.php'; ?>

    <div class="container">

        <h3><?php echo $post['title']; ?></h3>
        <div class="card horizontal">
            <div class="card-stacked">
                <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>

                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><?php echo $post['title']; ?></span>
                    <p><?php echo $post['body']; ?></p>
                    <small>By: <?php echo $post['author']; ?> at <?php echo $post['created_at']; ?></small>
                </div>

                <form class="text-right" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                    <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                </form>

                <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a>
                
            </div>
        </div>

    </div>

    

<?php include 'inc/footer.php'; ?>