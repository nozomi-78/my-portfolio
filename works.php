<!-- ==========header=========== -->
<?php
$path='./';
$page_title='works';
//headの読み込み
require_once('head.php');
?>
</head>

<!-- ==========body=========== -->
<body>
<?php
//headerの読み込み
require_once('header.php');
?>

  <main>
    <h1 class="wk-ttl con-ttl">works</h1>
    <div class="wk-works nl-container">

      <section class="wk-work con-item">
          <p class="wk-work-type">site</p>
        <a href="work/my-portfolio.php" class="wk-work-link">
          <h2 class="wk-work-name">ポートフォリオ</h2>
          <ul>
            <li>現在ご覧いただいているサイト</li>
            <li class="wk-work-img"><img src="img/works/portfolio.jpg" alt="作品詳細ページへ移動"></li>
          </ul>
        </a>
      </section>

      <section class="wk-work con-item">
          <p class="wk-work-type">game</p>
        <a href="work/seacat.php" class="wk-work-link">
          <h2 class="wk-work-name">シーキャット</h2>
          <ul>
            <li>不思議なネコが生まれるゲーム</li>
            <li class="wk-work-img"><img src="img/works/seacat.jpg" alt="作品詳細ページへ移動"></li>
          </ul>
        </a>
      </section>
      </div>
  </main>

<?php require_once('footer.php'); ?>
