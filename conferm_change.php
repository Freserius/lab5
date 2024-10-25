
<?php
include "D:\OpenServer\htdocs\lab5\bd.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $term = $_POST['name'];
    $img = $_FILES['img']['name'];
    $definition = $_POST['definition'];
    $target_dir = "img/";
    $target_file = $target_dir . basename($img);

    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO fact (name, details, img) VALUES ('$term', '$definition', '$img')";
        if (mysqli_query($mysql, $sql)) {
            echo "Новый термин успешно добавлен!";
        } else {
            echo "Ошибка: " . $sql . "<br>" . mysqli_error($mysql);
        }
    } else {
        echo "Ошибка загрузки изображения.";
    }
}
?>

<p><a href="index.php">На главную</a></p>