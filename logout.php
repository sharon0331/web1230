<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登出</title>
</head>
<body>
<p align=center>
    
    <?php
    session_start();
    session_unset();  // 清除所有session變數
    session_destroy();  // 銷毀session
    header('location:home.php?method=message&message=登出成功');
    exit();
    ?>

</p>
</body>
</html>