<?php
$site_title="inoue nozomi";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- ▼CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/reset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/style.css" />

  <title><?php
    if(isset($page_title)){
      echo $page_title. '｜' .$site_title;
    }else{
      echo $site_title;
    };
  ?></title>

  <!-- JavaScript -->
  <script src="<?php echo $path; ?>js/object/scroll.js" defer></script>
