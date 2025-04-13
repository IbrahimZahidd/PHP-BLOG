<!DOCTYPE html>
<html>
<head>
    <title>New Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <h1>New Blog Post</h1>
    <form method="post" action="save_post.php">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="6" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Publish</button>
    </form>
</body>
</html>