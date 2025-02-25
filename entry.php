<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: https://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <title>
    SampleCorp.のホームページを公開しました。｜<?php echo $title; ?>
  </title>
  <meta name="Description" content="<SampleCorp.のホームページを公開しました。｜<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:type" content="article">
  <meta property="og:title" content="SampleCorp.のホームページを公開しました。｜<?php echo $title; ?>">
  <meta property="og:description" content="SampleCorp.のホームページを公開しました。｜<?php echo $description; ?>">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">

  <?php include 'font_common.php'; ?>
</head>

<body id="top">
  <div id="wrapper" class="subpage-wrapper">
    <?php include 'header.php'; ?>
    <div class="page-title">
      <div class="inner">
        <h2 class="page-lead"><span class="eng">News</span><span class="ja">新着情報</span></h2>
      </div>
    </div>

    <div id="l-main">
      <section class="bg-333">
        <div class="single ">
          <div class="clearfix">
            <div id="main">
              <div class="mbox animation slideup shadow">
                <h3 class="mtitle-bll type1 b-m20">
                  SampleCorp.のホームページを公開しました。
                </h3>
                <div class="blog-page-detail">
                  <time class="blog-date2">
                    2025.01.01
                  </time>
                </div>
                SampleCorp.のホームページを公開しました。<br>
                こちらはサンプルサイトです。<br>
                今後こちらで様々な情報を発信して参ります。
              </div>
            </div>
            <div id="side">
              <p class="mtitle_category white">Archive</p>
              <div class="blog-month">
                <ul>
                  <li><a href="entry_list.php">2025年1月（1）</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <ol class="breadcrumb">
        <li><a href="./" class="home"><i class="fas fa-home"></i></a></li>
        <li>新着情報</li>
      </ol>
    </div>
  </div>
  <?php include 'footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
    integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <script src="js/jquery.easeScroll.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
</body>

</html>