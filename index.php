<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>登録画面</div>
   <form action="write.php" method="post">
    名前：<input type="text" name="name"><br>
    住所：<input type="text" name="address"><br>
    Email：<input type="text" name="email"><br>
    備考：<textarea name="memo" cols="30" rows="10"></textarea>
    <button type="submit">送信</button>
    </form>
</body>
</html>