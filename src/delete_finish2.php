<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>削除完了</title>
    
    <link rel="stylesheet" href="../css/delete_finish2.css">
</head>
<body>

    <?php require '../connect/db-connect.php'; ?>
    <?php
    try {
        $id = $_GET['id'];
        
        $stmt = $db->prepare("DELETE FROM Sweets WHERE syouhin_id = $id ");
        $stmt->execute();
 
    } catch (PDOException $e) {
        // エラー発生
        echo $e->getMessage();
    } finally {
        // DB接続を閉じる
        $db = null;
    }
    ?>
    
    <br><br><br><br>
    <h1>削除しました。</h1>
    <br><br>
    <button type="button" class="button" onclick="location.href='delete.php'">一覧へ戻る</button>
</body>
</html>
