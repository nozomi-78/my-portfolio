<!-- ==========header=========== -->
<?php
$path='./';
//headの読み込み
require_once('head.php');
?>
  <!-- JavaScript -->
  <script src="<?php echo $path; ?>js/object/home-message-text.js" defer></script>
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
      <section>
        <lu class="home-nav home-item js-scroll scroll-fade-top-normal">
          <li class="hover-inner-shadow"><a href="profile.php" ontouchstart="">profile<img src="img/content-icon-profile.png" alt="クリックでプロフィールページへ移動"></a></li>
          <li class="hover-inner-shadow"><a href="works.php" ontouchstart="">works<img src="img/content-icon-works.png" alt="クリックで作品集ページへ移動"></a></li>
          <li class="hover-inner-shadow"><a href="contact.php" ontouchstart="">contact<img src="img/content-icon-contact.png" alt="クリックで問い合わせページへ移動"></a></li>
        </lu>
      </section>

      <section class="home-message-wrap">
        <p class="home-message-text js-home-message-text js-scroll scroll-fade-top-slow">ごゆっくりどうぞ。</p>
      </section>
    </div>
  </main>

<?php require_once('footer.php'); ?>
