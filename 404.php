<?php
http_response_code(404);
include 'header.php';
?>

<div class="container">
    <div class="error-page">
        <h1>404</h1>
        <h2>Page Not Found</h2>
        <p>Oops! The page you're looking for doesn't exist.<br>
        It may have been moved or the URL is incorrect.</p>
        <a href="index.php" class="btn">🏠 Back to Home</a>
    </div>
</div>

<?php include 'footer.php'; ?>
