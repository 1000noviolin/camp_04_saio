<?php
// ★ALL
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=story;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM story_table ORDER BY indate DESC");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p class="indate">';
    $view .= $result["indate"];
    $view .= "</p>";
    $view .= '<p class="title">';
    $view .= $result["title"];
    $view .= "</p>";
    $view .= '<p class="profile">';
    $view .= $result["profile"];
    $view .= "</p>";
    $view .= '<p class="story">';
    $view .= $result["story"];
    $view .= "</p>";
    $view .= '<p class="category">';
    $view .= $result["category"];
    $view .= "</p>";
  }

}
?>


<?php
// ★category 名言
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=story;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt1 = $pdo->prepare("SELECT * FROM story_table WHERE category = '名言' ORDER BY indate DESC");
$status = $stmt1->execute();

//３．データ表示
$view1="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt1->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $view1 .= '<p class="indate">';
    $view1 .= $result["indate"];
    $view1 .= "</p>";
    $view1 .= '<p class="title">';
    $view1 .= $result["title"];
    $view1 .= "</p>";
    $view1 .= '<p class="profile">';
    $view1 .= $result["profile"];
    $view1 .= "</p>";
    $view1 .= '<p class="story">';
    $view1 .= $result["story"];
    $view1 .= "</p>";
    $view1 .= '<p class="category">';
    $view1 .= $result["category"];
    $view1 .= "</p>";
  }

}
?>

<?php
//★category　小ネタ 
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=story;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt2 = $pdo->prepare("SELECT * FROM story_table WHERE category = '小ネタ' ORDER BY indate DESC");
$status = $stmt2->execute();

//３．データ表示
$view2="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt2->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt2->fetch(PDO::FETCH_ASSOC)){
    $view2 .= '<p class="indate">';
    $view2 .= $result["indate"];
    $view2 .= "</p>";
    $view2 .= '<p class="title">';
    $view2 .= $result["title"];
    $view2 .= "</p>";
    $view2 .= '<p class="profile">';
    $view2 .= $result["profile"];
    $view2 .= "</p>";
    $view2 .= '<p class="story">';
    $view2 .= $result["story"];
    $view2 .= "</p>";
    $view2 .= '<p class="category">';
    $view2 .= $result["category"];
    $view2 .= "</p>";
  }

}
?>

<?php
//★category　恋愛 
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=story;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt3 = $pdo->prepare("SELECT * FROM story_table WHERE category = '恋愛' ORDER BY indate DESC");
$status = $stmt3->execute();

//３．データ表示
$view3="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt3->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt3->fetch(PDO::FETCH_ASSOC)){
    $view3 .= '<p class="indate">';
    $view3 .= $result["indate"];
    $view3 .= "</p>";
    $view3 .= '<p class="title">';
    $view3 .= $result["title"];
    $view3 .= "</p>";
    $view3 .= '<p class="profile">';
    $view3 .= $result["profile"];
    $view3 .= "</p>";
    $view3 .= '<p class="story">';
    $view3 .= $result["story"];
    $view3 .= "</p>";
    $view3 .= '<p class="category">';
    $view3 .= $result["category"];
    $view3 .= "</p>";
  }

}
?>

<?php
//★category　お金 
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=story;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt4 = $pdo->prepare("SELECT * FROM story_table WHERE category = 'お金' ORDER BY indate DESC");
$status = $stmt4->execute();

//３．データ表示
$view4="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt4->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt4->fetch(PDO::FETCH_ASSOC)){
    $view4 .= '<p class="indate">';
    $view4 .= $result["indate"];
    $view4 .= "</p>";
    $view4 .= '<p class="title">';
    $view4 .= $result["title"];
    $view4 .= "</p>";
    $view4 .= '<p class="profile">';
    $view4 .= $result["profile"];
    $view4 .= "</p>";
    $view4 .= '<p class="story">';
    $view4 .= $result["story"];
    $view4 .= "</p>";
    $view4 .= '<p class="category">';
    $view4 .= $result["category"];
    $view4 .= "</p>";
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/tab.js"></script>
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- タブメニューstart -->
<nav>
<ul class="tab clearfix">
  <li class="active">#ALL</li>
  <li>#名言</li>
  <li>#小ネタ</li>
  <li>#恋愛</li>
  <li>#お金</li>
</ul>
</nav>
<!-- タブメニューend -->
<div class="box21">
    <p class="fadein">TODAY'S STORY</p>
    <p class="about">世界各国の偉人の名言と、その言葉にまつわるエピソードをご紹介！<br>
    参考：阿刀田高 (1984)『ユーモア人間一日一言』ワニ文庫.</p>
<!-- Main[Start] $view-->
<main>
 <ul class="show">
    <!-- [$view] この箇所にphpを埋め込んでいる -->
    <div class="container jumbotron"><?=$view?></div>
</ul>
<!-- Main[End] -->
<!-- Main[Start] $view-->
<ul class="show">
    <!-- [$view] この箇所にphpを埋め込んでいる -->
    <div class="container jumbotron"><?=$view1?></div>
</ul>
<!-- Main[End] -->
<!-- Main[Start] $view-->
<ul class="show">
    <!-- [$view] この箇所にphpを埋め込んでいる -->
    <div class="container jumbotron"><?=$view2?></div>
</ul>
<!-- Main[End] -->
<!-- Main[Start] $view-->
<ul class="show">
    <!-- [$view] この箇所にphpを埋め込んでいる -->
    <div class="container jumbotron"><?=$view3?></div>
</ul>
<!-- Main[End] -->
<!-- Main[Start] $view-->
<ul class="show">
    <!-- [$view] この箇所にphpを埋め込んでいる -->
    <div class="container jumbotron"><?=$view4?></div>
</ul>
</main>
<!-- Main[End] -->
<!-- ほわほわstart -->
<script src="https://cdn.jsdelivr.net/npm/bubbly-bg@1.0.0/dist/bubbly-bg.js"></script>
<script type="text/javascript">
      bubbly({
        colorStart: '#ffb03c',
        colorStop: '#ff708d',
        blur:1,
        compose: 'source-over',
        bubbleFunc:() => `hsla(${Math.random() * 50}, 100%, 50%, .3)`
      });
 </script>
<!-- ほわほわend -->
</div>
<!-- footer[Start] -->
<footer>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
    <p id="page-top"><a href="#">PAGE TOP</a></p>
  </nav>
</footer>
<!-- footer[End] -->
</body>
</html>
