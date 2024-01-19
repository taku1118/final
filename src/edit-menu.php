<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品編集画面</title>
    <link rel="stylesheet" href="../css/edit-menu.css">
</head>
<body>

<?php require '../connect/db-connect.php'; ?>

<h1>商品編集画面</h1>
<form action="top.php">
    <button>トップへ</button>
</form>

<form action="product.php">
    <button>商品一覧画面へ戻る</button>
</form>

<table>
    <tr>
        <th>商品ID</th>
        <th>商品画像</th>
        <th>商品名</th>
        <th>価格</th>
        <th>カテゴリ</th>
        <th></th>
    </tr>

    <?php
    $sql = $db->query('SELECT * FROM Sweets LEFT JOIN Category ON Sweets.category_id = Category.category_id');
    $cnt = 0;

    foreach ($sql as $row) {
        $cnt++;
        echo '<tr>
                <td>', $row['syouhin_id'], '</td>
                <td><img src="../img/', $row['syouhin_img'], '" alt="', $row['syouhin_mei'], '"></td>
                <td>', $row['syouhin_mei'], '</td>
                <td>', $row['syouhin_nedan'], '</td>
                <td>', $row['category_name'], '</td>
                <td><a href="edit.php?id=', $row['syouhin_id'], '">編集</a></td>
            </tr>';
    }
    ?>
</table>

</body>
</html>
