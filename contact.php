<?php
// ini_set('display_errors', "On");

//外部ファイルの読み込み
require_once('../inc/config.php');
require_once('../inc/function.php');

session_start();

//画面の切り替え
  //入力画面モード(初期値)
  $mode="input";
  $errmessage=array();

//[確認画面]から戻るボタンで[入力画面]に戻ってきたとき
if(isset($_POST['back']) && $_POST['back']){
  //何もしない

//[入力画面]から確認ボタンで[確認画面]に飛んできたとき
}else if(isset($_POST['confirm']) && $_POST['confirm']){

  //nameエラーチェック・セッションに代入
  if(empty($_POST['name'])){
    $errmessage[]="※名前を入力してください";
  }else if(mb_strlen($_POST['name'])<=1 || mb_strlen($_POST['name'])>20){
    $errmessage[]="※名前は1文字以上、20文字以内にしてください";
  }
  $_SESSION['name']     =h($_POST['name']);

  //emailエラーチェック・セッションに代入
  if(empty($_POST['email'])){
    $errmessage[]="※返信先メールアドレスを入力してください";
  }else if(mb_strlen($_POST['email'])>200){
    $errmessage[]="※返信先メールアドレスは200文字以内にしてください";
  }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errmessage[]="※返信先メールアドレスが不正です";
  }
  $_SESSION['email']    =h($_POST['email']);

  //mesaageエラーチェック・セッションに代・
  if(empty($_POST['message'])){
    $errmessage[]="※メッセージを入力してください";
  }else if(mb_strlen($_POST['message'])<=10 || mb_strlen($_POST['message'])>1000){
    $errmessage[]="※メッセージは10文字以上、1000文字以内にしてください";
  }
  $_SESSION['message']  =h($_POST['message']);

  //モードの切り替え
  if(empty($errmessage)){
    $token=bin2hex(random_bytes(32));//トークンの生成
    $_SESSION['token']=$token;
    $mode="confirm";
  }else{
    $mode="input";
  }


//[確認画面]から送信ボタンで[送信完了画面]に飛んできたとき
}else if(isset($_POST['send']) && $_POST['send']){
  //エラーチェック
  if(empty($_POST['token']) || empty($_SESSION['token']) || empty($_SESSION['email']) || $_POST['token'] !== $_SESSION['token']){

    //不正な処理が行われたとき
    $errmessage[] ='不正な処理が行われました';
    $_SESSION = array();//念のためセッション情報は削除
    $mode                ='input';

  }else{

    //正常な処理が行われたとき
    $message=
      "お問い合わせを受け付けました。\r\n 5日以内に「@gmail.com」のドメインアドレスよりご返信させていただきますので、お手数ではございますが受信設定をご確認後、次のメールまで今しばらくお待ちくださいませ。\r\n\r\n"
      ."・お名前\r\n".$_SESSION['name']."\r\n\r\n"
      ."・返信先メールアドレス\r\n".$_SESSION['email']."\r\n\r\n"
      ."・お問い合わせ内容\r\n".preg_replace("/\r\n|\r|\n/" , "\r\n" , $_SESSION['message'])."\r\n\r\n\r\n"
      ."=====================\r\n井上のぞみ\r\nポートフォリオサイト：https://inouenozomi.com \r\n=====================";

    mail($_SESSION['email'],'【inouenozomi】お問合せ内容のご確認[自動送信メール]',$message);
    mail($my_address,'【inouenozomi】お問合せがありました',$message);

    //セッションの初期化
    $_SESSION = array();

    //送信完了画面モードに切り替え
    $mode="send";

  }

//初回表示(GET)のとき
}else{
  //セッション情報を初期化
  $_SESSION = array();
}?>



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
  <h2 class="contact-smallttl">お問い合わせ内容の入力</h2>
  <!-- エラーメッセージ -->
  <?php if(!empty($errmessage)) :?>
    <p style="margin-bottom:1em;color:red; text-align:center; background:pink;" class="contact-error"><?php echo implode($errmessage,'<br>');?></p>
  <?php endif; ?>
  <!-- 入力フォーム -->
  <form action="" method="post" class="con-item">
    <dl class="contact-mail-detail">

      <dt><label for="name">お名前</label></dt>
        <dd><input type="text"  name="name"  id="name"  size="30" value="<?php
          if(!empty($_SESSION)){
            echo $_SESSION['name'] ;
          }else{
            echo '';
          }
        ?>" required></dd>

      <dt><label for="email">返信先メールアドレス</label></dt>
        <dd><input type="email" name="email" id="email" size="30" value="<?php
          if(!empty($_SESSION)){
            echo $_SESSION['email'] ;
          }else{
            echo '';
          }
        ?>" required></dd>

      <dt><label for="message">お問合せ内容</label></dt>
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
    <div class="contact-btn-area nl-item"><p class="btn-contact" ontouchstart=""><input type="submit" name="confirm" value="確認"></p></div>
  </form>

<!-- 確認画面 -->
<?php elseif($mode == 'confirm'): ?>
  <h2 class="contact-smallttl">お問い合わせ内容の確認</h2>
  <form action="" method="post" class="con-item contact-check">
  <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <dl class="contact-mail-detail">
      <dt>お名前</dt>
      <dd><?php echo $_SESSION['name'] ?></dd>
      <dt>返信先メールアドレス</dt>
      <dd><?php echo $_SESSION['email'] ?></dd>
      <dt>お問い合わせ内容</dt>
      <dd><?php echo nl2br($_SESSION['message']) ?></dd>
    </dl>
    <div class="contact-btn-area nl-item">
      <p class="btn-contact" ontouchstart=""><input type="submit" name="back" value="戻る"></p>
      <p class="btn-contact" ontouchstart=""><input type="submit" name="send" value="送信"></p>
    </div>
  </form>

<!-- 送信完了画面 -->
<?php elseif($mode == 'send'): ?>
  <h2 class="contact-smallttl">送信完了しました</h2>
  <p class="con-item">
    お問合せありがとうございます。<br><br>
    下記のアドレスより、お問い合わせ内容のご確認メール（自動送信）を送信いたしました。<br>
    万が一受信できない場合はお手数ではございますが、[受信設定][入力されたメールアドレス]をご確認後、再度お問い合わせいただきますようお願いいたします。<br><br>
    また、いただきましたお問合せについてのご返信は5日以内にさせていただきますので、恐れ入りますが今しばらくお待ちくださいませ。<br>
    どうぞ宜しくお願い申し上げます。<br><br>
    ▽自動送信メールアドレス<br>
    nozomiinoue@www247.sakura.ne.jp
  </p>
  <div class="contact-btn-area nl-item"><p class="btn-contact" ontouchstart=""><a href="<?php echo $path ?>">トップへ</a></p></div>
<?php endif; ?>

    </div>
  </main>

<?php require_once('footer.php'); ?>
