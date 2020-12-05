
<?php
$user_title="【inouenozomi】お問合せ内容のご確認[自動送信メール]";
$my_title="【inouenozomi】お問合せがありました";
$message=
      "お問い合わせを受け付けました。\r\n 5日以内に「@gmail.com」のドメインアドレスよりご返信させていただきますので、お手数ではございますが受信設定をご確認後、次のメールまで今しばらくお待ちくださいませ。\r\n\r\n"
      ."・お名前\r\n".$_SESSION['name']."\r\n\r\n"
      ."・返信先メールアドレス\r\n".$_SESSION['email']."\r\n\r\n"
      ."・お問い合わせ内容\r\n".preg_replace("/\r\n|\r|\n/" , "\r\n" , $_SESSION['message'])."\r\n\r\n\r\n"
      ."=====================\r\n井上のぞみ\r\nポートフォリオサイト：https://inouenozomi.com \r\n=====================";
