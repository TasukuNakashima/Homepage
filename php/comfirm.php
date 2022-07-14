<?php
session_start();

//入力画面からのアクセスでなければ、戻す
if(!isset($_SESSION['form'])) {
    header('Location: contact.php');
    exsit();
}else {
    $post = $_SESSION['form'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfirmページ</title>
</head>
<body>
    <h1>回答ありがとうございました</h1>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['text'])) {
    $isset_status = 'POSTED, isset() True';
    $text_value = $_POST['text'];
  } else {
    $isset_status = 'POSTED, isset() False';
    $text_value = '';
  }
} else {
  $isset_status = 'started without POST';
  $text_value = '';
}
?>