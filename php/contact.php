<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    }
    //フォームの送信時にエラーをチェックする
    if ($_post['last_name'] === '') {
        $error['last_name'] = 'blank';
    }
    if ($_post['first_name'] === '') {
        $error['first_name'] = 'blank';
    }
    if ($_post['email'] === '') {
        $error['email'] = 'blank';
    }
    // } else if (!filter_var($post['email'], FILTER_VARIDATE_EMAIL))
        // $error['email'] = 'email';
    if ($_post['inquary'] === '') {
        $error['inquary'] = 'blank';
    }

    // if (cout($error) === 0) {
    //     //エラーがないので確認画面に移動
    // $_SESSION['form'] = $_post;
    //     header('..//jp/comfirm.php');
    //     exit();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e4a9507649.js" crossorigin="anonymous"></script>
    <title>お問い合わせページ</title>
    <!-- アイコン -->
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- アイコン -->

    <head>
<title>テキストエリアの高さをリサイズ</title>


</head>
</head>
    <header>
        <div class="box-1">
        <div class="back-color">
        <div class="pc-menu" id="color1">
            <ul id="color2">
                <div id="svg_color">
                <a href="#top"><svg class="svg" viewBox="0 0 1000 714"><path d="M0,0 h1000 v714 h-90 v-604 h-820 v603 h-90z M0,300 h1000 v110 h-1000z M305,0 h145 l605,714 h-145z M550,0 h145 l-605,714 h-145"/></svg></a>
                </div>
                <li><a href="" class="link1">トップ</a></li>
                <li><a href="" class="link2">お問い合わせ</a></li>
                <li><p class="link3">ログイン</p></li>
                <li><p class="link4">マイページ<!-- 今後アイコンにする可能性あり --></p></li>
            </ul>
        </div>
        <div class="top-logo">
            <!-- <img src="img/logo-top.png"> -->
            <!-- 背景に画像を挿入する実験中 -->
        </div>
        </div>
        </div>
    </header>
<main>
    <body>
        <h1>お問い合わせフォーム</h1>

<form action="" method="POST">
    <hr>
    <label>
        <p class="input-title">姓<span>（必須）</span> </p>
        <input class="input-text" type="text" name="first_name" placeholder="例：叡智">
        <?php if ($error['first_name'] === 'blank'): ?>
            <p class="error_msg">※姓をご記入ください</p>
        <?php endif; ?>
    </label>
    <hr>
    <label>
    <p class="input-title">名<span>（必須）</span></p>
        <input class="input-text" type="text" name="last_name" placeholder="例：華子">
        <?php if ($error['last_name'] === 'blank'): ?>
            <p class="error_msg">※お名前をご記入ください</p>
        <?php endif; ?>
    </label>
    <hr>
    <label>
     <p class="input-title">メールアドレス<span>（必須）</span></p>
        <input class="email" type="email" name="email" placeholder="例：eichihanako@ktt.com">
        <?php if ($error['email'] === 'blank'): ?>
            <p class="error_msg">※メールアドレスをご記入ください</p>
        <?php endif; ?>
        <?php if ($error['email'] === 'email'): ?>
            <p class="error_msg">※メールアドレスを正しくご記入ください</p>
        <?php endif; ?>
    </label>
    <hr>
    <label>
    <p class="input-title">依頼・質問<span>（必須）</span></p>
        <textarea class="text-box" name="inquary" placeholder="質問、依頼はこちら" cols="30" rows="5"></textarea>
        <?php if ($error['inquary'] === 'blank'): ?>
            <p class="error_msg">※質問、依頼をご記入ください</p>
        <?php endif; ?>
    </label>
    <br><hr>
        <input class="button" type="submit" value="CONFORM" >
</form>
    </body>
</main>
<div class="origin-popup">
<div class="popup">
    <h1>準備中です</h1>
    <p>現在、ログイン・新規登録の機能は実装中です</p>
    <br>
    <p>ご迷惑おかけして申し訳ありませんが、<br>今しばらくお待ちください</p>
</div>
</div>
<footer>
    <section class="f-section1">
        <div class="f-page">
            <p><a href="">KTT Projectsとは</a></p>
            <p><a href="">活動内容</a></p>
            <p><a href="">実績</a></p>
        </div>
        <div class="f-page">
            <p><a href="">よくあるお問い合わせ</a></p>
            <p><a href="">お問い合わせ</a></p>
        </div>
        <div class="f-page">
            <p><a href="">ログイン</a></p>
            <p><a href="">マイページ</a></p>
            <p><a href="">アカウント設定</a></p>
            <br>
        </div>
    </section>
    <section class="f-section2">
        <div class="writing f-under">
            <p class="copyright">Copyright ©︎ 2022 KTT Projects.</p>
            <p><a href="">　利用規約</a></p>
            <p><a href="">　プライバシーポリシー</a></p>
        </div>
        <div class="f-icon f-under">
            <a href="https://m.youtube.com/channel/UCihqEDqGrLOOrs0o-IBulqw"><i class="fa-brands fa-youtube f-youtube"></i></a>
            <div id="admin">
            <p><button type="button" class="admin_popup">管理者</button></p>
            </div>
        </div>
    </section>
</footer>
<script type="text/javascript" src="../js/contact.js"></script>
</body>
</html>
