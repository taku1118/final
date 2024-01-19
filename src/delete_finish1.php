<!DOCTYPE html>
<html lang="ja">
<head>
	<?php require '../connect/db-connect.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除確認</title>
  
    <link rel="stylesheet" href="../css/delete_finish1.css">
</head>
<body>
	
	<?php
	$id = $_GET['id'];
	$sql = $db->query(
		"SELECT * FROM Sweets
			JOIN Category
			ON Sweets.category_id = Category.category_id
			WHERE Sweets.syouhin_id = $id
		"
	);
	$res = $sql->fetch(PDO::FETCH_ASSOC);
	?>
    
    <p class="sakujo">削除しますか？</p>
    
    <button class="shohin">
        <img class="img1" src='../img/<?= $res['syouhin_img'] ? $res['syouhin_img'] : 'NoImage.png' ?>' alt='<?= $res['syouhin_img'] ?>の画像がでてナイ！'>
        <table class="itiran">
            <tr>
                <td>カテゴリー：<?php echo isset($res['category_name']) ? $res['category_name'] : ''; ?></td>
            </tr>
            <tr>
                <td>商品名：<?php echo isset($res['syouhin_mei']) ? mb_substr($res['syouhin_mei'], 0, 10) : ''; ?>…</td>
                <td>値段：￥<?php echo isset($res['syouhin_nedan']) ? $res['syouhin_nedan'] : ''; ?></td>
            </tr>
        </table>
    </button><br>
    
	<?php
    echo "<a href='delete_finish2.php?id=$id' class='yes'>はい</a>";
?>

    <a href="#" onclick="history.back()" class="no">いいえ</a>
</body>
</html>
