<?php
    session_start();
    $id = $_SESSION['ID'];
    if ($id == '') {
        die('ログインしてください');
    }
?>
<html>
    <head><title>プロフィール</title></head>
    <body>
        ユーザID:<?php echo htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>
    </body>
</html>