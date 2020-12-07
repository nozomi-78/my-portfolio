//トップページ下部のメッセージ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
let messageArea = document.getElementsByClassName('js-home-message-text')[0];
let today = new Date();
let hour = today.getHours();
let message;

switch (true) {
  case hour >= 5 && hour <= 8:
    message = 'おはようございます。<br>今日も一日良い日になりますように！';
    break;
  case hour >= 9 && hour <= 11:
    message = 'こんにちは。<br>調子はどうですか？';
    break;
  case hour >= 12 && hour <= 13:
    message = 'こんにちは。<br>お昼はもう食べましたか？';
    break;
  case hour >= 14 && hour <= 16:
    message = 'こんにちは。<br>午後も頑張りましょうね。';
    break;
  case hour >= 17 && hour <= 18:
    message = 'こんばんは。<br>夕飯は決まりましたか？';
    break;
  case hour >= 19 && hour <= 21:
    message = 'こんばんは。<br>今日も一日お疲れさまでした。';
    break;
  case hour >= 22 && hour <= 23:
    message = '夜遅くにお疲れ様です。<br>明日も良い日になりますように。';
    break;
  case hour >= 0 && hour <= 2:
    message = '夜遅くにお疲れ様です。<br>今日は良い日になりますように。';
    break;
  case hour >= 3 && hour <= 4:
    message = '夜から朝への境目。<br>この時間は少し特別に感じてワクワクします。';
    break;
};

messageArea.innerHTML = message;
