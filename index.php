<?php
$posts = json_decode(file_get_contents('posts.json'), true);
$posts = array_reverse($posts); // Show newest first
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <h1>My Blog</h1>
    <a href="new.php" class="btn btn-primary mb-4">New Post</a>
    <?php foreach ($posts as $post): ?>
        <div class="mb-4">
            <h3><a href="post.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></h3>
            <p><?= nl2br(htmlspecialchars(substr($post['content'], 0, 100))) ?>...</p>
        </div>
    <?php endforeach; ?>
</body>
</html>
