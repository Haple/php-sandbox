<?php
    require('config/config.php');
    require('config/db.php');

    

    if (isset($_POST['submit'])) {
        $update_id = mysqli_real_escape_string($data_connection, $_POST['update_id']);
        $title = mysqli_real_escape_string($data_connection, $_POST['title']);
        $author = mysqli_real_escape_string($data_connection, $_POST['author']);
        $body = mysqli_real_escape_string($data_connection, $_POST['body']);

        $query = "UPDATE POSTS SET 
                    TITLE='$title',
                    AUTHOR='$author',
                    BODY='$body' 
                WHERE ID={$update_id}
                ";

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
        <h3>Edit Post</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"> <?php echo $post['body']; ?> </textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form>
    </div>

<?php include 'inc/footer.php'; ?>
