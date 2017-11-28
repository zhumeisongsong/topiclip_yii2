<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="site-contact">

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

    <?php else: ?>
      <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

          <div class="form-group">
              <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
          </div>

            <?php ActiveForm::end(); ?>

        </div>
      </div>

    <?php endif; ?>

  <main class="contact-con">
    <nav class="nav-animated">
      <div class="container">
        <section class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                  aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img src="../image/logo.png" alt="TOPICLIP">
          </a></section>
        <section class="collapse navbar-collapse navbar-right no-padding" id="navbar">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a href="#company" class="arrow-right">ご利用企業様</a></li>
            <li class="nav-item"><a href="#reason" class="arrow-right">TOPICLIPとは</a></li>
            <li class="nav-item"><a href="#plan" class="arrow-right">料金プラン</a></li>
            <li class="nav-item"><a href="#question" class="arrow-right">よくある質問</a></li>
            <li class="nav-item nav-btn"><a href="contact.html" class="btn btn-blue">お問い合わせ</a></li>
          </ul>
        </section>
      </div>
    </nav>
    <section class="submit-con container">
      <h2>お問い合わせ</h2>
      <form id="form_item" class="form-item" name="form_item" method="post">
        <div class="input-con"><label for="exampleInputEmail1">御社名（必須）</label> <input type="text" title="company"
                                                                                      name="company" id="company"
                                                                                      class="input-default form-control"
                                                                                      autocomplete="off"></div>
        <div class="input-con"><label for="exampleInputEmail1">ご担当者様名（必須）</label> <input type="text" title="name"
                                                                                         name="name" id="name"
                                                                                         class="input-default form-control"
                                                                                         autocomplete="off"></div>
        <div class="input-con"><label for="exampleInputEmail1">メールアドレス（必須）</label> <input type="email" title="email"
                                                                                          name="email" id="email"
                                                                                          class="input-default form-control"
                                                                                          autocomplete="off"></div>
        <div class="input-con"><label for="exampleInputEmail1">電話番号</label> <input type="text" title="phone"
                                                                                   name="phone" id="phone"
                                                                                   class="input-default form-control"
                                                                                   autocomplete="off"></div>
        <div class="input-con"><label for="question">ご質問</label> <textarea title="question" name="question"
                                                                           id="question" class="form-control"
                                                                           autocomplete="off" rows="8"></textarea></div>
        <button type="submit" title="form_item" class="btn-green">送信</button>
      </form>
      <div
        class="info-con">
        <p>TOPICLIPにご関心をお持ちいただきまして、ありがとうございます。</p>
        <p>ご相談、料金のお見積もりなど、お気軽にお問合わせください。</p>
        <p>お問合せ内容の確認後、担当者よりご連絡させていただきます。</p>
      </div>
    </section>
    <!--footer-->
    <footer class="container footer-con">
      <h4>“話題”を見つける“話題”の傾向を知るWebクリッピングツール「TOPICLIP　（トピクリップ）」</h4>
      <div class="btn-con"><a href="#plan" class="btn btn-yellow">料金プランを見る</a> <a href="contact.html"
                                                                                  class="btn btn-green">お問い合わせ</a></div>
      <div class="link-con row"><a href="#" class="col-xs-12">利用規約</a> <a href="#" class="col-xs-12">プライバシーポリシー</a> <a
          href="#" class="col-xs-12">運営会社：株式会社Green romp</a></div>
    </footer>
  </main>
</div>

