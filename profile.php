<!-- ==========header=========== -->
<?php
$path='./';
$page_title='profile';
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
    <h1 class="pf-ttl con-ttl">profile</h1>
    <div class="nl-container">
      <p class="pf-img con-item js-scroll scroll-fade-top-normal"><img src="img/profile/profile.jpg" alt=""></p>
      <section class="pf-me con-item">
        <h2 class="pf-sabttl">井上のぞみ</h2>
          <dl class="pf-me-detail">
            <dt class="js-scroll scroll-underline-right-normal">誕生日</dt>
            <dd>8月2日</dd>
            <dt class="js-scroll scroll-underline-right-normal">出身</dt>
            <dd>大阪府大阪市</dd>
            <dt class="js-scroll scroll-underline-right-normal">趣味・好きなこと</dt>
            <dd>ポケモン／絵を描くこと／ハリーポッターシリーズ</dd>
            <dt class="js-scroll scroll-underline-right-normal">目標</dt>
            <dd>「そのサイトにとってのゴール」を勝ち取るサイトを作るエンジニア/プログラマーになる。<br>
            ゴール＝購入やシェア等。<br>
            その為には、このサイトのゴールは何か、ユーザーはサイトを見てワクワクするか、という考えを大切にしてサイト作りを行っていきたいです。</dd>
            <dt class="js-scroll scroll-underline-right-normal">好きな言葉</dt>
            <dd>向き不向きより前向き。</dd>
          </dl>
      </section>

      <section class="con-item">
        <h2 class="pf-sabttl">skill</h2>
        <div class="pf-skill-inner">
          <section>
            <h3 class="pf-skill-type js-scroll scroll-underline-right-normal">言語</h3>
              <ul class="pf-skill-detail">
                <li>HTML</li>
                <li>CSS</li>
                <li>SCSS</li>
                <li>JavaScript</li>
                <li>JQuery</li>
                <li>Vue.js</li>
                <li>PHP</li>
                <li>SQL(MySQL)</li>
              </ul>
          </section>
          <section>
            <h3 class="pf-skill-type js-scroll scroll-underline-right-normal">ソフトウェア</h3>
              <ul class="pf-skill-detail">
                <li>Photoshop</li>
                <li>Illustrator</li>
                <li>DreamWeaver</li>
                <li>WordPress</li>
                <li>Visual Studio Code</li>
                <li>git</li>
                <li>Excel</li>
                <li>Word</li>
                <li>GIMP</li>
              </ul>
          </section>
        </div>
      </section>
    </div>
  </main>

<?php require_once('footer.php'); ?>
