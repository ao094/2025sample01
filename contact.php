<?php require_once './common.php'; ?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <title>お問い合わせ｜<?php echo $title; ?></title>
  <meta name="Description" content="お問い合わせ｜<?php echo $description; ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="css/reset.css?<?= time() ?>">
  <link rel="stylesheet" href="css/common.css?<?= time() ?>">
  <link rel="stylesheet" href="css/basis.css?<?= time() ?>">
  <link rel="stylesheet" href="css/smartphone.css?<?= time() ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="お問い合わせ｜<?php echo $title; ?>">
  <meta property="og:description" content="お問い合わせ｜<?php echo $description; ?>">
  <?php include 'font_common.php'; ?>
</head>

<body id="top">
  <div id="wrapper" class="subpage-wrapper">
    <?php include 'header.php'; ?>
    <div class="page-title ">
      <div class="inner">
        <h2 class="page-lead"><span class="eng">Contact</span>
          <span class="ja">お問い合わせ</span>
        </h2>
      </div>
    </div>
    <div id="l-main">

      <section>
        <div class="single type1">
          <h2 class="title-big type2 b-m40" data-title="Contact"><span class="ja">お問い合わせ</span></h2>

          <p class="tcenter chosei2">お電話、またはメールでお問い合わせください。<br>メールフォームでお問い合わせの場合、<br class="spbr">こちらから改めてご連絡を差し上げます。
          </p>

          <ul class="telbnr">
            <li>
              <p class="telbnr-ttl"><span>電話でのお問い合わせ</span></p>
              <a href="tel:<?php echo $telNo; ?>"><?php echo $telNo; ?></a>
            </li>
          </ul>

          <div class="mbox animation slideup transparent">
            <p class="tcenter mtext1 red">本フォームはサンプルのため、<br class="spbr">実際のデータ送信や登録処理は<br class="spbr">行われません。</p>

            <div id="form-box">
              <div class="form-contents form-pattern-2">
                <form method="post" enctype="multipart/form-data" onsubmit="return sendmail1_1(this);">
                  <dl>
                    <dt class=""><span class="required">企業名</span></dt>
                    <dd class="">
                      <input type="text" class="textarea" name="企業名(必須)" data-name="企業名" size="70"
                        placeholder="例：株式会社○○">
                    </dd>
                    <dt class=""><span class="required">お名前</span></dt>
                    <dd class="">
                      <input type="text" class="textarea" name="お名前(必須)" data-name="お名前" size="70"
                        placeholder="例：山田　太郎">
                    </dd>
                    <dt class=""><span class="required">メールアドレス</span></dt>
                    <dd class="">
                      <input type="text" class="textarea" name="email(必須)" data-name="メールアドレス" size="70"
                        placeholder="例：info@sample.com">
                    </dd>
                    <dt class=""><span class="required">電話番号</span></dt>
                    <dd class="">
                      <input type="text" class="textarea" name="電話番号(必須)" data-name="電話番号" size="70"
                        placeholder="例：012-345-6789">
                    </dd>
                    <dt class=""><span class="optional">お問合せ項目</span></dt>
                    <dd class="">
                      <label><input type="checkbox" class="checkbox" name="お問合せ項目[]" data-name="お問合せ項目"
                          value="資料請求">資料請求</label>
                      <label><input type="checkbox" class="checkbox" name="お問合せ項目[]" data-name="お問合せ項目"
                          value="打ち合わせ予約">打ち合わせ予約</label>
                      <label><input type="checkbox" class="checkbox" name="お問合せ項目[]" data-name="お問合せ項目"
                          value="その他">その他</label>
                    </dd>
                    <dt class=""><span class="required">お問い合わせ内容</span></dt>
                    <dd class="">
                      <textarea class="textarea" name="お問い合わせ内容(必須)" data-name="お問い合わせ内容" rows="10" cols="75"
                        placeholder="ご質問など、ご自由にお書きください。"></textarea>
                    </dd>
                    <dt><span class="required">認証</span></dt>
                    <dd>
                      <input type="text" class="textarea" name="認証(必須)" data-name="認証" size="70"
                        placeholder="SampleCorp">
                      <p class="auth-descript">スパムメール対策の為に「<?php echo $company; ?>」と入力して下さい。</p>
                    </dd>
                  </dl>

                  <a class="submit-btn" href="thanks.php">メールを送信する</a>
                </form>
              </div>
            </div>
          </div>
          <div class="policy">
      <dl class="accordion">
  <dt>個人情報保護方針</dt>
  <dd>
  <div class="scrollbar policy-box">
        <p class="b-m20"><?php echo $company; ?>
         （以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。
        </p>
        <h4 class="mtitle_small2">個人情報の取得</h4>
        <p class="b-m20">当社は、適法かつ公正な手段によって個人情報を取得します。</p>
        <h4 class="mtitle_small2">個人情報の管理</h4>
        <p class="b-m20">
         当社は、お客様の個人情報を正確かつ最新の状態に保ち、個人情報への不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティシステムの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、安全対策を実施し個人情報の厳重な管理を行います。
        </p>
        <h4 class="mtitle_small2">個人情報の利用目的</h4>
        <p class="b-m20">お客様からお預かりした個人情報は、当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。</p>
        <h4 class="mtitle_small2">個人情報の第三者への開示・提供の禁止</h4>
        <p class="b-m10">当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。</p>
        <ul class="list_disc b-m20">
         <li>お客さまの同意がある場合</li>
         <li>お客さまが希望されるサービスを行なうために当社が業務を委託する業者に対して開示する場合</li>
         <li>法令に基づき開示することが必要である場合</li>
        </ul>

        <h4 class="mtitle_small2">ご本人の照会</h4>
        <p class="b-m20">お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。</p>
        <h4 class="mtitle_small2">法令、規範の遵守と見直し</h4>
        <p class="b-m20">当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。</p>


       </div>
  </dd>
</dl>
      </div>
        </div>
      </section>



    </div>
    <ol class="breadcrumb">
      <li><a href="./" class="home"><i class="fas fa-home"></i></a></li>
      <li>お問い合わせ</li>
    </ol>
    <?php include 'footer.php'; ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js"
    integrity="sha256-mBCu5+bVfYzOqpYyK4jm30ZxAZRomuErKEFJFIyrwvM=" crossorigin="anonymous"></script>
  <script src="js/basis.js?<?= time() ?>"></script>
  <script>
  $(function () {
   // accordion
   $(".accordion dt").on("click", function () {
    $(this).next().slideToggle();
    $(this).toggleClass("on");
   });
  });
</script>
</body>

</html>