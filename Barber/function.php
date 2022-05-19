<?php

    // filter_var - функція яка фільтрує певне значення, удаляє html символи і нші символи які краще не добавляти у БД;
    // trim - видаляє лишні пробіли із рядка;
   $Log = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); //Фільтруєм як звичайний рядок;

        // filter_var - функція яка фільтрує певне значення, удаляє html символи і нші символи які краще не добавляти у БД;
    // trim - видаляє лишні пробіли із рядка;
   $Name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING); //Фільтруєм як звичайний рядок;

       // filter_var - функція яка фільтрує певне значення, удаляє html символи і нші символи які краще не добавляти у БД;
    // trim - видаляє лишні пробіли із рядка;
    $Pas = filter_var(trim($_POST['parol']), FILTER_SANITIZE_STRING); //Фільтруєм як звичайний рядок;


    $Pas2 = filter_var(trim($_POST['parol2']), FILTER_SANITIZE_STRING); //Фільтруєм як звичайний рядок;

    //Перевірака на кількість написання слів у поле Log
    //mb_srtlen - дліна переміної

    $alert1 =  "<script>alert('Неправильна довжина логіна');</script>";

    $alert2 =  "<script>alert('Неправильна довжина імені');</script>";

    $alert3 =  "<script>alert('Неправильна довжина пароля (от 2 до 8 символів)');</script>";

    $alert4 =  "<script>alert('Паролі не співпадають');</script>";

    if(mb_strlen($Log) < 4 || mb_strlen($Log) > 80)
    {
        echo $alert1;

        exit();
    }
    

    else if(mb_strlen($Name) < 3 || mb_strlen($Name) > 40)
    {
        echo $alert2 ;

        exit();
    }

    else if(mb_strlen($Pas) < 2 || mb_strlen($Pas) > 8 )
    {
        echo  $alert3;

        exit();
    }

    else if($Pas != $Pas2 )
    {
        echo $alert4;

        exit();
    }

    //Хеширования пароля + соль до стовреного пароля
    $Pas = md5($Pas."qwertyasdf123");

    //Подключение к БД;
    //mysql[i] -покращена версія;
    $mysql = new mysqli('localhost', 'root', '','register_table');
    //INSERT INTO - установить в (какую таблицу); 
    $mysql->query("INSERT INTO `users_list` (`login`, `name`, `password`) VALUES('$Log', '$Name', '$Pas')");

    //Закритие БД;
    $mysql->close();

    //На какую страницу переходить 
    // Тут має бути силка на сторінку з вибором майстра, цену..
    header('Location: zapus.php');
?>