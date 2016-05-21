<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Blog</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="wrapper">

    <h1>Добро пожаловать в блог!</h1>

    <?php if(!empty($messages)) : ?>
      <?php foreach ($messages as $message) : ?>
          <div>
              <a href="post.php?id=<?= $message['id'] ?>">
                <?= $message['title'] ?>
              </a>
              <?= $message['time'] ?> 
              <?= $message['login'] ?> 
              <p><?= $message['message'] ?></p>
          </div>
      <?php endforeach; ?>
    <?php endif; ?>
    
    <h2>Добавить сообщение</h2>
    <form action="index.php" method="POST">
      <label>Заголовок: <input type="text" name="title" value="11"></label>
      <label>Текст сообщения: <textarea name="message">stssss</textarea></label>
      <input type="submit" value="Добавить сообщение">
    </form>

  </div>

</body>
</html>