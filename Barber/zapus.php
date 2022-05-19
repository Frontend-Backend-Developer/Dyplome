<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\zapus_style.css">
    <link rel="stylesheet" href="css\register.css">
    <link rel="icon" href="img\titles.png">
    <title>Barbershop</title>
</head>
<body>

    <div class="top">   

        <div class="baner_zapus">
            <span class="eleAnim baner_tx">Онлайн запис до барбершопа та татуювання</span><br>
            <span class="eleAnim" id = "text_p">Житомир, вул. Київська 10</span>

        </div>

        <div class = "reg">
            <span><!--Виводим им'я користувача-->
            <!--Виводим им'я користувача-->
                <?php
                    if($_COOKIE['user'] ==''): 
                ?>
            </span>
        </div>

    </div>

    <?php else: ?>

<!--ВИВОДИТЬСЯ ІМ'Я ЗАРЄСТРОВАНОГО КОРИСТУВАЧА-->

        <div class =  "s_main">
            <ul class = "menu">
                <li class = "menu_listed"><a href = "#"><strong><?=$_COOKIE['user']?></strong></a>
                    <ul class = "menu_droped">
                    <lI> 
                        <a href = "exit.php">Фідбек</a>
                    </lI>  
                    
                    <lI> 
                        <a href = "exit.php">Вихід</a>
                    </lI>      
                    </ul>
                </li>

            </ul>    
            <?php endif; ?>   
      </div>
</body> 
</html>