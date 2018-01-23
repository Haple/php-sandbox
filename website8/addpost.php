<?php
    require('config/config.php');
    require('config/db.php');

        if (isset($_POST['submit'])) {
            $title = mysqli_real_escape_string($data_connection, $_POST['title']);
            $author = mysqli_real_escape_string($data_connection, $_POST['author']);
            $body = mysqli_real_escape_string($data_connection, $_POST['body']);

            $query = "INSERT INTO POSTS(TITLE,AUTHOR,BODY) VALUES('$title','$author','$body')";

            if (mysqli_query($data_connection, $query)) {
                header("Location: " . ROOT_URL . "");
            } else {
                echo "ERROR: " . mysqli_error($data_connection);
            }

        }
/*
    $query = "SELECT * FROM POSTS";

    $result = mysqli_query($data_connection, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //var_dump($posts);

    mysqli_free_result($result);

    mysqli_close($data_connection);
    */

?>


<?php include 'inc/header.php'; ?>

    
    <div class="container">
        <h3>Add Post</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form>
    </div>

<?php include 'inc/footer.php'; ?>
