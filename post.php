<?php
$posts = json_decode(file_get_contents('posts.json'), true);
$id = $_GET['id'] ?? '';
$post = null;
foreach ($posts as $p) {
    if ($p['id'] == $id) {
        $post = $p;
        break;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($post['title'] ?? 'Post Not Found') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <a href="index.php" class="btn btn-secondary mb-4">← Back</a>
    <?php if ($post): ?>
        <h1><?= htmlspecialchars($post['title']) ?></h1>
        <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    <?php else: ?>
        <p>Post not found.</p>
    <?php endif; ?>
</body>
</html>