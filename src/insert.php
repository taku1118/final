<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品登録</title>
    <link rel="stylesheet" href="../css/insert.css">
</head>
<body>
<form action="top.php">
    <button>トップへ</button>
</form>

<?php require '../connect/db-connect.php' ?>
<form action="insert_finish.php" method="post" enctype="multipart/form-data">
<span class="yohaku">商品名　　</span><input type="text" class="text" name="pname" required><br>

<span class="yohaku">カテゴリー</span>
<select name="category" class="text" required>
    <option value="" selected hidden required>選択してください</option>
    <option value="0">なし</option>
    <option value="1">スナック</option>
    <option value="2">チョコ</option>
</select><br>

<span class="yohaku">値段　　　</span><input type="text" class="text" name="price" required><br>
<span class="yohaku">商品画像　　</span><input type="file" class="filebutton" name="upload_image" accept="image/*" required><br>
<input type="submit" class="button2" value="登録">
</form>
</body>
</html>
