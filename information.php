<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <title>会社情報｜<?php echo $title; ?></title>
  <meta name="Description" content="会社情報｜<?php echo $description; ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="会社情報｜<?php echo $title; ?>">
  <meta property="og:description" content="会社情報｜<?php echo $description; ?>">
  <?php include 'font_common.php'; ?>
</head>

<body id="top">
  <div id="wrapper" class="subpage-wrapper">
    <?php include 'header.php'; ?>
    <div class="page-title">
      <div class="inner">
        <h2 class="page-lead"><span class="eng">Information</span>
          <span class="ja">会社情報</span>
        </h2>
      </div>
    </div>
    <div id="l-main">

      <section class="bg-01 type1">
        <div class="single">
          <h2 class="title-big type2 b-m40" data-title="philosophy"><span class="ja">企業理念</span></h2>
          <div class="mbox animation slideup transparent small-box">
            <div class="txt" data-aos="fade-in">
              <h3 class="philosophy-title tcenter">可能性を引き出し、未来をつくる</h3>
              <p class="t-m20">
                SampleCorpは、人々の可能性を最大限に引き出すことを使命としています。私たちは、一人ひとりの才能と情熱を尊重し、多様な働き方を支援することで、個人と企業が共に成長できる社会を目指します。変化の激しい時代において、柔軟で持続可能なキャリア支援を提供し、未来に向けた新しい価値を創造していきます。<br>人々が「働くことの喜び」を実感できる世界をともに実現しましょう。
              </p>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="single">
          <h2 class="title-big type2 b-m40" data-title="Overview"><span class="ja">企業概要</span></h2>
          <div class="mbox animation slideup transparent">
            <div class="small-box">
              <table class="tbl_new">
                <tr>
                  <th>社名</th>
                  <td><?php echo $company; ?></td>
                </tr>
                <tr>
                  <th>所在地</th>
                  <td><?php echo $postalCode; ?><br>
                    <?php echo $address; ?></td>
                </tr>
                <tr>
                  <th>代表者</th>
                  <td><?php echo $daihyo; ?>（やまだ　たろう）</td>
                </tr>
                <tr>
                  <th>設立</th>
                  <td>2023年</td>
                </tr>
                <tr>
                  <th>E-mail</th>
                  <td>taro-yamada@sample.com
                  </td>
                </tr>
                <tr>
                  <th>事業内容</th>
                  <td>
                    <ul class="list_disc">
                      <li>キャリアコンサルティング事業</li>
                      <li>人材派遣・紹介事業</li>
                      <li>研修・スキルアップ支援事業</li>
                    </ul>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </section>

    </div>
    <ol class="breadcrumb">
      <li><a href="./" class="home"><i class="fas fa-home"></i></a></li>
      <li>会社情報</li>
    </ol>
    <?php include 'footer.php'; ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
    integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <script src="js/basis.js?<?= time() ?>"></script>

</body>

</html>