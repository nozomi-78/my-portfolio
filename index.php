<!-- ==========header=========== -->
<?php
$path='./';
//headの読み込み
require_once('head.php');
?>
  <!-- JavaScript -->
  <script src="<?php echo $path; ?>js/object/top-under-message.js" defer></script>
</head>

<!-- ==========body=========== -->
<body>
<?php
//headerの読み込み
require_once('header.php');
?>


  <main class="home-wrap">
    <h1 class="home-ttl">inoue<br>nozomi</h1>
    <div class="nl-container">
      <section class="">
        <lu class="home-nav home-item">
          <li class="btn-homenav"><a href="profile.php" ontouchstart="">profile<img src="img/content-icon-profile.png" alt="クリックでプロフィールページへ移動"></a></li>
          <li class="btn-homenav"><a href="works.php" ontouchstart="">works<img src="img/content-icon-works.png" alt="クリックで作品集ページへ移動"></a></li>
          <li class="btn-homenav"><a href="contact.php" ontouchstart="">contact<img src="img/content-icon-contact.png" alt="クリックで問い合わせページへ移動"></a></li>
        </lu>
      </section>

      <section class="home-tweet">
        <p class="home-tweet-text js-home-message-text">ごゆっくりどうぞ。</p>
      </section>
    </div>
  </main>

<?php require_once('footer.php'); ?>
