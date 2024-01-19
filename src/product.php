<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product.css"> <!-- Include your custom styles -->
    <title>商品一覧画面</title>
</head>
<body>

<?php require '../connect/db-connect.php'; ?>

<h1>商品一覧画面</h1>
<form action="top.php">
    <button>トップへ</button>
</form>
<table class="menu">
    <?php
    $sql = $db->query('SELECT * FROM Sweets');
    $cnt = 0;

    foreach ($sql as $row) {
        $cnt++;
        echo '<td>
                <img src="../img/', $row['syouhin_img'], '" alt="', $row['syouhin_mei'], '"><br>',
                $row['syouhin_mei'], '<br>￥', $row['syouhin_nedan'], '
              </td>';
        if ($cnt % 3 == 0) echo '</tr><tr>';
    }
    ?>
</table>

<form action="edit-menu.php">
    <button>編集画面へ</button>
</form>

</body>
</html>
