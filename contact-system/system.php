<?php
// ini_set('display_errors', "On");

//外部ファイルの読み込み
require_once('../inc/config.php');
require_once('../inc/function.php');

session_start();

//画面の切り替え
  //入力画面モード(初期値)
  $mode="input";
  $errmessage=array();

//[確認画面]から戻るボタンで[入力画面]に戻ってきたとき
if(isset($_POST['back']) && $_POST['back']){
  //何もしない

//[入力画面]から確認ボタンで[確認画面]に飛んできたとき
}else if(isset($_POST['confirm']) && $_POST['confirm']){

  //nameエラーチェック・セッションに代入
  if(empty($_POST['name'])){
    $errmessage[]="※名前を入力してください";
  }else if(mb_strlen($_POST['name'])<=1 || mb_strlen($_POST['name'])>20){
    $errmessage[]="※名前は1文字以上、20文字以内にしてください";
  }
  $_SESSION['name']     =h($_POST['name']);

  //emailエラーチェック・セッションに代入
  if(empty($_POST['email'])){
    $errmessage[]="※返信先メールアドレスを入力してください";
  }else if(mb_strlen($_POST['email'])>200){
    $errmessage[]="※返信先メールアドレスは200文字以内にしてください";
  }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errmessage[]="※返信先メールアドレスが不正です";
  }
  $_SESSION['email']    =h($_POST['email']);

  //mesaageエラーチェック・セッションに代・
  if(empty($_POST['message'])){
    $errmessage[]="※メッセージを入力してください";
  }else if(mb_strlen($_POST['message'])<=10 || mb_strlen($_POST['message'])>1000){
    $errmessage[]="※メッセージは10文字以上、1000文字以内にしてください";
  }
  $_SESSION['message']  =h($_POST['message']);

  //モードの切り替え
  if(empty($errmessage)){
    $token=bin2hex(random_bytes(32));//トークンの生成
    $_SESSION['token']=$token;
    $mode="confirm";
  }else{
    $mode="input";
  }


//[確認画面]から送信ボタンで[送信完了画面]に飛んできたとき
}else if(isset($_POST['send']) && $_POST['send']){
  //エラーチェック
  if(empty($_POST['token']) || empty($_SESSION['token']) || empty($_SESSION['email']) || $_POST['token'] !== $_SESSION['token']){

    //不正な処理が行われたとき
    $errmessage[] ='不正な処理が行われました';
    $_SESSION = array();//念のためセッション情報は削除
    $mode                ='input';

  }else{

    //正常な処理が行われたとき
    require_once('sendmail.php');//送信メールの件名・本文の読み込み
    mail($_SESSION['email'],$user_title,$message);
    mail($my_address,$my_title,$message);

    //セッションの初期化
    $_SESSION = array();

    //送信完了画面モードに切り替え
    $mode="send";

  }

//初回表示(GET)のとき
}else{
  //セッション情報を初期化
  $_SESSION = array();
}?>
