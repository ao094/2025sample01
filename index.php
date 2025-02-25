<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <title><?php echo $title; ?></title>
  <meta name="Description" content="<?php echo $description; ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:description" content="<?php echo $description; ?>">

  <?php include 'font_common.php'; ?>
</head>

<body id="top">

  <div id="wrapper ">
    <?php include 'header.php'; ?>

    <div id="slide-wrap">
      <div id="slideshow">
        <div class="slide-box">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="slide-img">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img img--02">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="slide-img img--03">
                </div>
              </div>
            </div>
          </div>

          <div class="catch__logo">
            <img src="img/logo-w.png" alt="<?php echo $company; ?>">
          </div>

          <div class="catch">

            <p class="txt-anime">未来は</p>
            <p class="txt-anime type2">小さなアイデアと行動から<br class="spbr">生まれる</p>

            <div class="t-m50">
              <p class="txt-anime type3">だから</p>
              <p class="txt-anime type4">一歩を踏み出す勇気が<br class="spbr">大きな可能性を広げる</p>
            </div>

            <div class="t-m50">
              <p class="txt-anime type5">失敗を恐れず挑戦する中で<br class="spbr">人は成長する</p>
              <p class="txt-anime type6">そのプロセスが<br class="spbr">新たな価値を生む</p>
            </div>
            <div class="t-m50">
              <p class="catch__main txt-anime type7">
                このmindsetが<br>
                未来を創る
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="l-main">

      <div class="bg-child type2">
        <div class="container">

          <div class="js-sticky">
            <div class="bg-red js-scale-change js-move-text">

              <p class="bg-text eng move-text">
                to create <br class="spbr"><span>New Possibilities</span>
              </p>

            </div>
          </div>
          <div class="spacer">
            <div class="single">
              <div class="title40 bold white chosei2">組織には無限の<br class="spbr">可能性がある。</div>
              <div class="sentence white">
                <p>多くの企業が「イノベーションが生まれにくい」という課題を抱えています。<br>
                  個々の力を十分に活かせず、トップダウン型の組織がクリエイティブな動きを阻害してしまう。問題は分かっていても、変化を起こすのは簡単ではありません。</p>
                <p>「イノベーション」とは、現状の課題やトラブルに向き合い、新しい視点やアイデアを受け入れ、そこから工夫を生み出すプロセスです。重要なのは、組織全体でイノベーションを支え、育む文化を作り出すことです。
                </p>
                <p><span class="yellow"><?php echo $company; ?></span>では、個々の能力を引き出し、組織全体をイノベーションへ導くためのメソッドを提供します。</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="toverflow">
        <section class="service bg-black">
          <div class="single">
            <h2 class="title-big type-white type1" data-title="Menu">
              <span class="ja">メニュー</span>
            </h2>
            <div class="service__box">
              <ul class="service__list  t-m50">
                <li>
                  <a href="information.php">
                    <div class="list__photo"><img src="img/service-photo01.jpg" alt=""></div>
                    <p class="list__txt move-anime">Company</p>
                    <p class="list__txt2 move-anime">Information</p>

                    <div class="list__txtarea">
                      <div class="list__title">
                        <p>会社概要</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="service.php">
                    <div class="list__photo"><img src="img/service-photo02.jpg" alt=""></div>
                    <p class="list__txt2 move-anime">HUMAN RESOURCE</p>
                    <p class="list__txt move-anime">DEVELOPMENT</p>
                    <div class="list__txtarea">
                      <div class="list__title">
                        <p>人材育成<br>
                          について</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="program.php">
                    <div class="list__photo"><img src="img/service-photo03.jpg" alt=""></div>
                    <p class="list__txt move-anime">Special</p>
                    <p class="list__txt2 move-anime">Program</p>
                    <div class="list__txtarea">
                      <div class="list__title">
                        <p>行動特性分析<br>
                          プログラム</p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="academy.php">
                    <div class="list__photo"><img src="img/service-photo04.jpg" alt=""></div>
                    <p class="list__txt2 move-anime">Youth</p>
                    <p class="list__txt move-anime">Academy</p>
                    <div class="list__txtarea">
                      <div class="list__title">
                        <p>若手人材育成<br>
                          について</p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>

      <section class="bg-black">
        <div class="single">
          <div class="news-box" data-aos="fade-in">
            <div class="news-left">
              <h2 class="title-big type-left type-white type1" data-title="News">
                <span class="ja">新着情報</span>
              </h2>
            </div>
            <div class="news-right top-blog">
              <ul class="news-list">
                <li><a href="entry.php"><span class="date">2025.01.01</span><span
                      class="txt">SampleCorp.のホームページを公開しました。</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    </div>
    <?php include 'footer.php'; ?>
  </div>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
    integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <script src="js/jquery.easeScroll.js"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
  <script src="js/scroll.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <script src="js/top.js"></script>

</body>

</html>