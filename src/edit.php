<!-- 商品更新画面のHTML -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品更新</title>
    <link rel="stylesheet" href="../css/edit.css">
</head>

<body>
    <!-- header3.php -->
    <h1>商品更新画面</h1>
    <?php require '../connect/db-connect.php' ?>
    <?php
    $id = $_GET['id'];
    $sql = $db->query(
        "SELECT * FROM Sweets
         LEFT JOIN Category ON Sweets.category_id = Category.category_id
         WHERE Sweets.syouhin_id = $id"
    );
    $res = $sql->fetch(PDO::FETCH_ASSOC);
    ?>

    <form action="edit_finish.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
        <span class="yohaku">商品名　　</span>
        <input type="text" name="pname" class="text" value="<?php
                                                            if (isset($res['syouhin_mei'])) {
                                                                echo $res['syouhin_mei'];
                                                            }
                                                            ?>"><br>

        <span class="yohaku">カテゴリー</span>
        <select name="category" class="text">
            <option value="<?php
                            if (isset($res['category_name'])) {
                                echo $res['category_name'];
                            }
                            ?>" selected hidden></option>
            <option value="0">なし</option>
            <option value="1">スナック</option>
			<option value="2">チョコ</option>
        </select><br>

        <span class="yohaku">値段　　　</span>
        <input type="text" name="price" class="text" value="<?php
                                                            if (isset($res['syouhin_nedan'])) {
                                                                echo $res['syouhin_nedan'];
                                                            }
                                                            ?>"><br>

        <span class="yohaku">商品画像　　</span>
        <input type="file" name="upload_image" class="filebutton" accept="image/*" value="<?php
                                                                                            if (isset($res['syouhin_img'])) {
                                                                                                echo $res['syouhin_img'];
                                                                                            }
                                                                                            ?>"><br>

        <input type="submit" class="button2" value="更新">
    </form>
</body>

</html>
