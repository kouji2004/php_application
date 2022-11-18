<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP掲示板</title>
</head>

<body>
  <h1>掲示板アプリ</h1>
  <hr>
  <div class="boardWrapper">
    <form class="formWrapper">
      <div>
        <input type="submit" value="書き込む">
        <label for="">名前</label>
        <input type="text" name="username">
      </div>

      <div>
        <textarea class="commentTextArea"></textarea>
      </div>
    </form>
  </div>
</body>

</html>