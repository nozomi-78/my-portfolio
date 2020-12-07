// 対象要素の取得
let target = document.querySelectorAll('.js-scroll');

let scrollAnimation = function () {
  for (let i = 0; i < target.length; i++) {
    //対象要素より余分にスクロールさせる
    let targetMargin = 100;
    //対象要素のトップ+targetMarginの位置までスクロールされたとき
    if (window.innerHeight > target[i].getBoundingClientRect().top + targetMargin) {
      //表示させるクラスの付与
      target[i].classList.add('show');
    }
  }
}
window.addEventListener('load', scrollAnimation);
window.addEventListener('scroll', scrollAnimation);
