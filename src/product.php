<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
			$name = $_GET['key'] ?? null;
			$kate = $_GET['kate'] ?? null;

			if($name)
				echo '<title>', $name, ' - 商品検索結果</title>';
			else if($kate)
				echo '<title>', $kate, ' - カテゴリ検索結果</title>';
			else
				echo '<title>トップ - 商品一覧</title>';

		?>
</head>
<body>
<body>
		<link rel="stylesheet" href="../css/header.css">

		
		<?php require '../connect/db-connect.php'; ?>
      
		<table class="menu">
		<?php
				if($name)
				    $sql = $db -> query("SELECT * FROM Sweets WHERE syouhin_mei LIKE '%$name%'");	
				else if($kate)
					$sql = $db -> query("SELECT * FROM Sweets  WHERE syouhin_category LIKE '%$kate%'");
					
				else
					$sql = $db -> query('SELECT * FROM Sweets');
				$cnt = 0;
			
			
				foreach($sql as $row){
					$cnt++; // 1 2 3
					echo '<td><a href=product_detail.php?id=', $row['syouhin_id'],
						 ' style=text-decoration:none;><img src="../img/', $row['syouhin_img'], 
						 '" alt="', $row['syouhin_mei'],
						 '"><br>',$row['syouhin_mei'],'<br>￥',$row['syouhin_nedan'],'</a></td>';
					if($cnt % 3 == 0) echo '</tr><tr>';
				}
			?>
		</table>
	</body>
    
    
    
</body>
</html>