<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録完了</title>
    <link rel="stylesheet" href="../css/insert_finish.css">
</head>
<body>
    <?php require '../connect/db-connect.php'; ?>

    <?php
    $filename = $_FILES['upload_image']['name'];
    $sql = $db->prepare('INSERT INTO Sweets (syouhin_mei, syouhin_nedan, syouhin_img, category_id) VALUES (?, ?, ?, ?)');
    
    // ファイルアップロード処理
    $uploaded_path = '../img/' . $filename;
    $result = move_uploaded_file($_FILES['upload_image']['tmp_name'], $uploaded_path);

    // カテゴリーが選択されているか確認
    $category = isset($_POST['category']) ? $_POST['category'] : null;

    $sql->execute([$_POST["pname"], $_POST["price"], $filename, $category]);
    
    $array = ['なし', 'スナック', 'チョコ'];
    $i = $category;

    echo '<h1>登録しました</h1>';
    echo '<button class="shohin"><img class="img1" src="../img/' . $_FILES['upload_image']['name'] . '">';
    echo '<table class="itiran">';
    echo '<tr>';
    echo '<td>カテゴリー：', $array[$i], '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>商品名：', $_POST['pname'], '</td>';
    echo '<td>値段：', $_POST['price'], '</td>';
    echo '</tr>';
    echo '</table>';
    ?>
    </button><br><br><br>
    <input type="button" class="button" onclick="location.href='insert.php'" value="続けて登録する">
</body>
</html>
