<?php
//問い合わせシステムの読み込み
require_once('contact-system/system.php');
?>

<!-- ==========header=========== -->
<?php
$path='./';
$page_title='contact';
//headの読み込み
require_once('head.php');
?>
</head>

<!-- ==========body============ -->
<body>
<?php
//headerの読み込み
require_once('header.php');
?>

  <main>
    <h1 class="contact-ttl con-ttl">contact</h1>
    <div class="nl-container">

<!-- 入力画面 -->
<?php if($mode == 'input') :?>
  <h2 class="contact-guid con-item">お問い合わせ内容の入力</h2>
  <!-- エラーメッセージ -->
  <?php if(!empty($errmessage)) :?>
    <p style="margin-bottom:1em;color:red; text-align:center; background:pink;" class="contact-error"><?php echo implode($errmessage,'<br>');?></p>
  <?php endif; ?>
  <!-- 入力フォーム -->
  <form action="" method="post" class="con-item">
    <dl class="contact-mail-detail">

      <dt class="js-scroll scroll-underline-right-normal"><label for="name">お名前</label></dt>
        <dd><input type="text"  name="name"  id="name"  size="30" value="<?php
          if(!empty($_SESSION)){
            echo $_SESSION['name'] ;
          }else{
            echo '';
          }
        ?>" required></dd>

      <dt class="js-scroll scroll-underline-right-normal"><label for="email">返信先メールアドレス</label></dt>
        <dd><input type="email" name="email" id="email" size="30" value="<?php
          if(!empty($_SESSION)){
            echo $_SESSION['email'] ;
          }else{
            echo '';
          }
        ?>" required></dd>

      <dt class="js-scroll scroll-underline-right-normal"><label for="message">お問合せ内容</label></dt>
        <dd>
          <textarea name="message" id="message" cols="30" rows="10" required><?php
            if(!empty($_SESSION)){
              echo $_SESSION['message'] ;
            }else{
              echo '';
            }
          ?></textarea>
        </dd>

    </dl>
    <div class="contact-btn-wrap nl-item"><p class="contact-btn hover-inner-shadow" ontouchstart=""><input type="submit" name="confirm" value="確認"></p></div>
  </form>

<!-- 確認画面 -->
<?php elseif($mode == 'confirm'): ?>
  <h2 class="contact-guid con-item">お問い合わせ内容の確認</h2>
  <form action="" method="post" class="con-item contact-check">
  <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <dl class="contact-mail-detail">
      <dt class="js-scroll scroll-underline-right-normal">お名前</dt>
      <dd><?php echo $_SESSION['name'] ?></dd>
      <dt class="js-scroll scroll-underline-right-normal">返信先メールアドレス</dt>
      <dd><?php echo $_SESSION['email'] ?></dd>
      <dt class="js-scroll scroll-underline-right-normal">お問い合わせ内容</dt>
      <dd><?php echo nl2br($_SESSION['message']) ?></dd>
    </dl>
    <div class="contact-btn-wrap nl-item">
      <p class="contact-btn hover-inner-shadow" ontouchstart=""><input type="submit" name="back" value="修正"></p>
      <p class="contact-btn hover-inner-shadow" ontouchstart=""><input type="submit" name="send" value="送信"></p>
    </div>
  </form>

<!-- 送信完了画面 -->
<?php elseif($mode == 'send'): ?>
  <h2 class="contact-guid con-item">送信完了しました</h2>
  <p class="con-item">
    お問合せありがとうございます。<br><br>
    下記のアドレスより、お問い合わせ内容のご確認メール（自動送信）を送信いたしました。<br>
    万が一受信できない場合はお手数ではございますが、[受信設定][入力されたメールアドレス]をご確認後、再度お問い合わせいただきますようお願いいたします。<br><br>
    また、いただきましたお問合せについてのご返信は5日以内にさせていただきますので、恐れ入りますが今しばらくお待ちくださいませ。<br>
    どうぞ宜しくお願い申し上げます。<br><br>
    ▽自動送信メールアドレス<br>
    nozomiinoue@www247.sakura.ne.jp
  </p>
  <div class="contact-btn-wrap nl-item"><p class="contact-btn hover-inner-shadow" ontouchstart=""><a href="<?php echo $path ?>">トップへ</a></p></div>
<?php endif; ?>

    </div>
  </main>

<?php require_once('footer.php'); ?>
