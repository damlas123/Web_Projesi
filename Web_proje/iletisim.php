<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="mesaj">
    <strong>Teşekkürler, <?php echo htmlspecialchars($name); ?>!</strong><br>
    Mesajınız başarıyla alındı. En kısa sürede sizinle iletişime geçilecektir.
</div>

</body>
</html>
