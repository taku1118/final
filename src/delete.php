<!DOCTYPE html>
<html lang="ja">
<head>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除確認</title>
    <link rel="stylesheet" href="../css/product.css">
</head>
<body>
	
	
<?php require '../connect/db-connect.php'; ?>

<h1>商品削除画面</h1>
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
                <a href=delete_finish1.php?id=',$row['syouhin_id'],
                ' style=text-decoration:none;>
                <img src="../img/', $row['syouhin_img'], '" alt="', $row['syouhin_mei'], '"><br>',
                $row['syouhin_mei'], '<br>￥', $row['syouhin_nedan'], '</a>
              </td>';
        if ($cnt % 3 == 0) echo '</tr><tr>';
    }
    ?>
</table>


</body>
</html>
