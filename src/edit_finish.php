<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新完了</title>
    
    <link rel="stylesheet" href="../css/edit-finish.css">
</head>
<body>

<?php require '../connect/db-connect.php' ?>

<?php
    $id = $_GET['id'];
    $filename = $_FILES['upload_image']['name'];

    if ($filename) {
        $uploaded_path = '../img/' . $filename;
        $result = move_uploaded_file($_FILES['upload_image']['tmp_name'], $uploaded_path);

        if ($result) {
            $sql = $db->prepare('UPDATE Sweets SET syouhin_mei=?, syouhin_nedan=?, syouhin_img=?, category_id=? WHERE syouhin_id=?');
            $sql->execute([$_POST["pname"], $_POST["price"], $filename, $_POST["category"], $id]);
        } else {
            echo '<h1>アップロードエラーが発生しました。</h1>';
        }
    } else {
        $sql = $db->prepare('UPDATE Sweets SET syouhin_mei=?, syouhin_nedan=?, category_id=? WHERE syouhin_id=?');
        $sql->execute([$_POST["pname"], $_POST["price"], $_POST["category"], $id]);
    }
?>

<!-- 修正後のコード -->

<?php
    $array = ['なし','スナック', 'チョコ'];
    $i = isset($_POST['category']) ? $_POST['category'] : null;

    echo '<h1>更新しました</h1>';

    echo '<button class="shohin">';
    if ($filename) {
        echo '<img class="img1" src="../img/' . $filename . '">';
    }
    echo '<table class="itiran">';
    echo '<tr>';
    echo '<td>カテゴリー：', isset($array[$i]) ? $array[$i] : '', '</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>商品名：', mb_substr($_POST['pname'], 0, 10), '…</td>';
    echo '<td>値段：', $_POST['price'], '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</button>';
    echo '<br><br><br>';
    echo '<input type="button" class="button" onclick="location.href=\'edit-menu.php\'" value="一覧へ戻る">';
?>
