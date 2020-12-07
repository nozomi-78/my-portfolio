<!-- ==========header=========== -->
<?php
$path='../';
$page_title='ポートフォリオ';
//headの読み込み
require_once('../head.php');
?>
</head>

<!-- ==========body=========== -->
<body>
<?php
//headerの読み込み
require_once('../header.php');
?>

  <main>
    <h1 class="wkitem-ttl">ポートフォリオ</h1>
      <div class="nl-container">
        <figure class="wkitem-main-image con-item"><img src="../img/works/portfolio.jpg" alt=""></figure>

        <p class="wkitem-word con-item">今ご覧いただいている私のポートフォリオサイトです。</p>

        <ul class="con-item wkitem-link">
          <li class="btn-wkitem-link js-scroll scroll-fade-right-normal" ontouchstart=""><a href="https://github.com/nozomi-78/my-portfolio" target="_blank">github</a></li>
        </ul>

        <dl class="con-item wkitem-detail">
          <dt class="js-scroll scroll-underline-right-normal">制作時間</dt>
          <dd>約24時間</dd>
          <dt class="js-scroll scroll-underline-right-normal">使用言語・ソフト</dt>
          <dd>HTML／CSS(SCSS)／JavaScript／PHP／Visual Studio Code／Photoshop</dd>
          <dt class="js-scroll scroll-underline-right-normal">制作意図</dt>
          <dd>メールフォーム作成・SCSSの練習のため</dd>
          <dd>自分を表現するサイトを作りたい。</dd>
          <dt class="js-scroll scroll-underline-right-normal">コメント</dt>
          <dd>フォントの色は#000ではなく、サイトに柔らかい雰囲気を出すため、ほんのりグレーにしています。</dd>
          <dd>メンテナンス性を良くするため、SCSSのフォルダ分けを用途ごとに細かく分けました。</dd>
          <dd>使用しているイラストは全て私がアナログで描き、Photoshopで加工したものです。</dd>
          <dd>httpへアクセスされた場合は、.htaccessファイルでhttpsへ301リダイレクトされるよう設定しています。</dd>
        </dl>
      </div>
      <?php require_once('return.php'); ?>
  </main>

<?php require_once('../footer.php'); ?>
