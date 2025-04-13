<?php
$title = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');

if ($title && $content) {
    $posts = json_decode(file_get_contents('posts.json'), true);
    $posts[] = [
        'id' => uniqid(),
        'title' => $title,
        'content' => $content
    ];
    file_put_contents('posts.json', json_encode($posts, JSON_PRETTY_PRINT));
}
header('Location: index.php');
exit;
