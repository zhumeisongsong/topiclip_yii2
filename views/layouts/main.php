<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <meta name="description" content="TOPICLIP “話題”を見つける “話題”の傾向を知る  Webクリッピングツール">
  <meta name="keywords" content="TOPICLIP トピクリップ">
  <meta name="author" content="TOPICLIP">
  <meta name="format-detection" content="telephone=no; email=no"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="renderer" content="webkit">
  <title>TOPICLIP</title>
    <?= Html::csrfMetaTags() ?>
  <!--css-->
  <link rel="stylesheet" href="../stylesheet/vendor.min.css">
  <link rel="stylesheet" href="../stylesheet/style.min.css">
  <!--favicons-->
  <link rel="apple-touch-icon" href="../image/logo-icon.png">
  <link rel="icon" href="../image/logo-icon.png">
</head>
<body>
<?php $this->beginBody() ?>

<?= $content ?>
<!--footer-->
<footer class="container footer-con">
  <h4>“話題”を見つける“話題”の傾向を知るWebクリッピングツール「TOPICLIP　（トピクリップ）」</h4>
  <div class="btn-con"><a href="#plan" class="btn btn-yellow">料金プランを見る</a> <a href="contact.html" class="btn btn-green">お問い合わせ</a>
  </div>
  <div class="link-con row"><a href="#" class="col-xs-12">利用規約</a> <a href="#" class="col-xs-12">プライバシーポリシー</a> <a
      href="#" class="col-xs-12">運営会社：株式会社Green romp</a></div>
</footer>
<?php $this->endBody() ?>

<!--javascript-->
<script src="../javascript/vendor.js"></script>
<script src="../javascript/app.js"></script>
</body>
</html>
<?php $this->endPage() ?>


