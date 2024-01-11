<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お菓子一覧</title>
</head>
<body>
<body>
		<link rel="stylesheet" href="../css/header.css">

		
		<?php require '../connect/db-connect.php'; ?>
      
		<table class="menu">
			<?php
			
				foreach($sql as $row){
					$cnt++; // 1 2 3
					echo '<td><a href=product_detail.php?id=', $row['syouhin_id'],
						 ' style=text-decoration:none;><img src="../img/', $row['syouhin_img'], 
						 '" alt="', $row['syouhin_mei'],
						 '"><br>',$row['syouhin_mei'],'<br>￥',$row['syohin_nedan'],'</a></td>';
					if($cnt % 3 == 0) echo '</tr><tr>';
				}
			?>
		</table>
	</body>
    
    
    
</body>
</html>