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
            <dt class="js-scroll scroll-underline-right-normal">プログラミングを勉強し始めた理由</dt>
            <dd>学生の頃からイラストや動画など、画面の中で何かを作るのが大好きでした。<br>
            そして以前の職場でECサイトの担当へ異動した時に初めてプログラミングというものを知り、
            「かっこいい！やってみたい！できるようになりたい！！」という純粋な憧れを持ったのがきっかけです。<br>
            その後、仕事をしながら一年間プログラミングスクールに通い、卒業した現在もフロントエンド系を中心に興味を持ったプログラミング言語を独学で勉強しています。<br>
            （現在はVue.jsを勉強中です。）<br>
            新しい言語を勉強し始めるときは毎回とてもワクワクします!</dd>
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
