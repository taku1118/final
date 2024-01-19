<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/top.css">
        <link rel="stylesheet" href="../css/header.css">
		
        <title>商品トップ画面</title>
    </head>
    <body>
       <?php require 'header.php' ?>
        <h1>商品トップ画面</h1>

        <form name="menu">
            <a href="product.php" class="menu-item">
                <img src="../img/hon.png" alt="一覧表示">
                <p>一覧表示</p>
            </a>
        <a href="insert.php" class="menu-item">
            <img src="../img/enpitsu.png" alt="新規登録">
                <p>新規登録</p>
        </a>
        <a href="edit-menu.php" class="menu-item">
            <img src="../img/monkey.png" alt="更新画面">
            <p>更新画面</p>
        </a>
        <a href="delete.php" class="menu-item">
            <img src="../img/gomi.png" alt="削除画面">
            <p>削除画面</p>
        </a>
        </form>
    </body>
</html>