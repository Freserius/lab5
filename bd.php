
<?php 
    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', 'root'); //Имя пользователя
    define('DB_PASSWORD', ''); //Пароль
    define('DB_NAME', 'veb_resept'); //Имя БД
    $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>
