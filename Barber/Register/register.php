<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <title>Register</title>
</head>
<body>

    <h1>Форма реєстрації</h1>

    <form action = "function.php" method = "post">
        <input type="text" class = "main_form" name = "login" id ="login" placeholder = "Введіть логін">

        <input type="text" class = "main_form" name = "name" id ="name" placeholder = "Введіть ім'я">

        <input type="password" class = "main_form" name = "parol" id ="parol" placeholder = "Введіть пароль">

        <input type="password" class = "main_form" name = "parol2" id ="parol2" placeholder = "Підтвердіть пароль">

        <button type="submit" class = "main_btn">Зареєструватися</button>  
    </form>


    <h2>Форма авторизації</h2>

    <!--Виводим им'я користувача-->
    <?php
        if($_COOKIE['user'] ==''): 
    ?>

    <!--Якщо куки Не пусті виводиться форма нижче-->
    <form action = "functionAut.php" method = "post">
        <input type="text" class = "main_form" name = "login3" id ="login3" placeholder = "Введіть логін">

        <input type="password" class = "main_form" name = "parol3" id ="parol3" placeholder = "Введіть пароль">

        <button type="submit" class = "main_btn">Авторизуватись</button>
        
    </form>

    <!--Якщо куки Пусті виводиться нижче-->
    <?php else: ?>

        <!--ВИВОДИТЬСЯ ІМ'Я ЗАРЄСТРОВАНОГО КОРИСТУВАЧА-->

        <p>Привіт <?=$_COOKIE['user']?>! Для вихода натисність <a href = "exit.php">здесь</a>.</p>

    <?php endif; ?>

</body>
</html>