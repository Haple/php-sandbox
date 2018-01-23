<?php
    require('config/config.php');
    require('config/db.php');

    $query = "SELECT * FROM POSTS ORDER BY CREATED_AT DESC";

    $result = mysqli_query($data_connection, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //var_dump($posts);

    mysqli_free_result($result);

    mysqli_close($data_connection);

?>


<?php include 'inc/header.php'; ?>
    <div class="container">
        <h3>Posts</h3>
        <?php foreach($posts as $post):?>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $post['title']; ?></h4>
                    <small class="card-subtitle mb-2 text-muted">By: <?php echo $post['author']; ?> at <?php echo $post['created_at']; ?></small>
                    <p class="card-text"><?php echo substr($post['body'], 0, 100); ?>(...)</p>
                    <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Read more</a>

                </div>
            </div>

        <?php endforeach; ?>
    </div>
    

<?php include 'inc/footer.php'; ?>
