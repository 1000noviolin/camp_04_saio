<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="next.php" method="post">
<p>お名前:<input type="text" name="name" size="20"></p>
<p>電話:<input type="tel"  name="tel" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="090-1234-5678"></p>
<p>メール:<input type="email" name="mail" placeholder="info@sample.com"></p>
<p>検索:<input type="search" name="search" autocomplete="on" list="list"></p>
<p><input type="submit" value="送信"></p> 
    </form>
</body>
</html>