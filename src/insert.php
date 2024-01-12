<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品編集画面</title>
</head>
<body>
<body>
        <?php require '../connect/db-connect.php'; ?>
      
		<table class="menu">
        <?php
			
				$sql = $db -> query('SELECT * FROM Sweets');
				$cnt = 0;
			
			
				foreach($sql as $row){
					$cnt++; // 1 2 3
					echo '<td><a href=product_detail.php?id=', $row['syouhin_id'],
						 ' style=text-decoration:none;><img src="../img/', $row['syouhin_img'], 
						 '" alt="', $row['syouhin_mei'],
						 '"><br>',$row['syouhin_mei'],'<br>￥',$row['syouhin_nedan'],'</a></td>
                         <button action = edit.php>編集</button> ';
                         
					if($cnt % 3 == 0) echo '</tr><tr>';
				}
		?>
		<form action="insert.php">
			<button>戻る</button>
		</form>

		</table>
	</body>
    
    
    
</body>
</html>