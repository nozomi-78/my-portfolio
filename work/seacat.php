<!-- ==========header=========== -->
<?php
$path='../';
$page_title='シーキャット';
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
    <h1 class="wkitem-ttl">シーキャット</h1>
      <div class="nl-container">
        <figure class="wkitem-main-image con-item"><img src="../img/works/seacat.jpg" alt=""></figure>

        <p class="wkitem-word con-item">1万回クリックすると不思議なネコさんが生まれるゲームです。<br>
        <u>※ゲームの流れをご理解いただきたいため、現在は20回のクリックでネコが生まれるよう設定しています。</u>
        </p>
        <ul class="con-item wkitem-link">
          <li class="btn-wkitem-link" ontouchstart=""><a href="../seacat/index.php" target="_blank">作品ページへ</a></li>
          <li class="btn-wkitem-link" ontouchstart=""><a href="https://github.com/nozomi-78/seacat" target="_blank">github</a></li>
        </ul>

        <dl class="con-item wkitem-detail">
          <dt>制作時間</dt>
          <dd>約34時間</dd>
          <dt>使用言語・ソフト</dt>
          <dd>HTML／CSS(SCSS)／JavaScript(Jquery/Ajax/json)／PHP／SQL(MySQL)／Visual Studio Code／GIMP</dd>
          <dt>制作意図</dt>
          <dd>PHP、SQLのスキルアップのため</dd>
          <dd>「バカみたいにくだらない、でもなぜだかﾌﾌｯとなってしまう」ゲームを作りたい。</dd>
          <dt>コメント</dt>
          <dd>クリック数と生まれたネコの情報はAjaxを使ってデータベースに非同期で登録され、ネコの情報は図鑑ページに反映されるようにしました。<br>
          使用しているイラストは全て私がアナログで描き、GIMPで加工したものです。</dd>
        </dl>
      </div>
      <?php require_once('return.php'); ?>
  </main>

<?php require_once('../footer.php'); ?>
