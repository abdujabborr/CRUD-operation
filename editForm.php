<?php
require_once('./templates/header.php');
include("./includes/class_autoload.inc.php");

$posts = new Posts();
$post = $posts->editPost($_GET['id']);
$id = $post['id'];
$title = $post['title'];
$body = $post['body'];
$author = $post['author'];

?>

<div class="text-center my-4">
    <h3>Edit post</h3>
</div>

<div class="row">
    <div class="col-md-7 mx-auto">
        <!--form input-->
        <form action="post.process.php?id=<?= $id;?>" method="POST">
                    <div class="form-group">
                        <label for="">Title:</label>
                        <input class="form-control" name="post-title" type="text" value="<?= $title;?>" required>
                    </div>

                    <div class="form-group">
                        <label for="">Content:</label>
                        <textarea class="form-control" name="post-content" type="text" required><?= $body;?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Author:</label>
                        <input class="form-control" name="post-author" type="text" value="<?= $author;?>" required>
                    </div>

                        <a href="index.php" type="button" class="btn btn-secondary my-4">Close</a>
                        <button type="submit" name="update" class="btn btn-primary">Update Post</button>
                </form>
    </div>
</div>

<?php
require_once('./templates/footer.php');
?>