<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <title>送信完了｜<?php echo $title; ?></title>
  <meta name="Description" content="送信完了｜<?php echo $description; ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="送信完了｜<?php echo $description; ?>">
  <meta property="og:title" content="送信完了｜<?php echo $title; ?>">
  <?php include 'font_common.php'; ?>
</head>

<body id="top">
  <div id="wrapper" class="subpage-wrapper">
    <?php include 'header.php'; ?>
    <div class="page-title page-title2">
      <div class="inner">
        <h2 class="page-lead"><span class="eng">Contact</span><span class="ja">送信完了</span></h2>
      </div>
    </div>
    <div id="l-main">

      <section class="bg-base type1">
        <div class="single">
          <h2 class="title-big b-m40" data-title="Thanks"><span class="ja">お問い合わせありがとうございます。</span></h2>
          <div class="thanks bold">
            <p class="tcenter mtext1 red">本フォームはサンプルのため、<br>実際のデータ送信や登録処理は<br class="spbr">行われておりません。</p>
            <p class="b-m50 tcenter t-m50">お問い合わせ頂きありがとうございます。<br>
              改めてご連絡をさせていただきますので、<br class="pcbr">
              今しばらくお待ちくださいますようお願いいたします。</p>
            <a href="./" class="btn03 type_center">ホームへ戻る</a>
          </div>

        </div>
      </section>

      <ol class="breadcrumb">
        <li><a href="./" class="home"><i class="fas fa-home"></i></a></li>
        <li>お問い合わせ</li>
        <li>送信完了</li>
      </ol>
    </div>
  </div>
  <?php include 'footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
    integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>

</body>

</html>