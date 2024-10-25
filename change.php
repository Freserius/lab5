<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="styles.css">
</head>
<body>
<header>
    <h2><a href="index.php">Главная</a></h2>
    <h2><a href="change.php">Добавление</a></h2>
</header>
<form action="conferm_change.php" method = "POST"  enctype='multipart/form-data'>
    <p>Название определyения:<input type="text" name = "name"></p>
    <p>Описание определения:<input type="text" name = "definition"></p>
    <p><input type="file" name = "img" accept="image/*"></p>
    <input type="submit" value="Send">
</form>
    
<footer>
    <h3 class="text">
      <li><a href="tel:+79626776139">+7 (962) 677-61-39</a></li>
    </h3>
    <h3 class="text">
      <li><a href="mailto:ivan@fediunin.ru">ivan@fediunin.ru</a></li>
    </h3>
  </footer>
    
</body>
</html>