<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
    include "D:\OpenServer\htdocs\lab5\bd.php";
    $result = mysqli_query($mysql, "SELECT * FROM `fact`");
    
?>

<header>
    <h2><a href="">Главная</a></h2>
    <h2><a href="change.php">Добавление</a></h2>
</header>
<div class = 'table_place'>
<table>
      <tr>
        <th>Номер определения</th>
        <th>Название определения</th>
        <th>Определение</th>
        <th>Картинка</th>
      </tr>
      <?php 
        while($name = mysqli_fetch_assoc($result)){?>
        <tr>
                <td><?php echo $name['id']?></td>
                <td><?php echo $name['name']?></td>
                <td><?php echo $name['details']?></td>
                <td><img  title="<?php echo $name['name'];?>" src="img\<?php echo $name['img'];?>" /></td>
        </tr>
            <?php
          }
     ?>
    </table>
</div>

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