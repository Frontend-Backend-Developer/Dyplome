<!doctype html>
<html lang="en">
<head>
    <meta charset = "UTF-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\zapus_style.css">
    <link rel="stylesheet" href="css\register.css">
    <link rel="icon" href="img\titles.png">
    <title>Barbershop</title>
</head>
<body>
    <header>

        <div class="logo"><a href="index.php"><img src="img\Photo.png" alt="Logo" class="logo_img"></a></div>

        <nav id="myNav" class="myNave">
                <div class="nave">
                    <a href="#home">Головна</a>
                    <a href="#about">Про нас</a>
                    <a href="#comand">Наша команда</a>
                    <a href="#galery">Галерея</a>
                    <a href="#price">Прайс-лист</a>
                    <a href="#contact">Контакти</a> 
                </div>

                <div class="sulkuMenu">    
                  
                <a href="#" class="zapus open">Онлайн запис</a>       
                                 <!-- силка -->
                <a href="#" id="myMenus" class="icons">&#9776;</a>

                </div>
        </nav>



        <!--Регистрация та Авторизация-->

    <div class="container">
        <div class="Popap">
        <div class="content">
         <div class='MyBtn'> <button class="ButAut">Авторизація</button> <button class="ButReg">Регістрація</button></div>
         <div class='HidnAut'>
          <div class= "main_reg_name">Авторизація</div>
            
        <!--Якщо куки Не пусті виводиться форма нижче-->
        <form action = "functionAut.php" method = "post" class="FormAut">

                <input type="email" class = "main_form" name = "login3" id ="login3" placeholder = "Введіть логін" required>

                <input type="password" class = "main_form" name = "parol3" id ="parol3" placeholder = "Введіть пароль"required>

                <button type="submit" class = "main_btn">Авторизуватись</button>
                
        </form>

        </div>
        

        <div class='hidnReg'>
          <div class= "main_reg_name">Реєстрація</div>

            <form action = "function.php" method = "post" class="FormReg">

            <input type="email" class = "main_form" name = "login" id ="login" placeholder = "Введіть логін" required>

            <input type="text" class = "main_form" name = "name" id ="name" placeholder = "Введіть ім'я" required>

            <input type="password" class = "main_form" name = "parol" id ="parol" placeholder = "Введіть пароль">

            <input type="password" class = "main_form" name = "parol2" id ="parol2" placeholder = "Підтвердіть пароль">

            <button type="submit" class = "close">Зареєструватися</button>  
            
        </form>

        </div>
      </div>
    </div>


        
    </header>    



    <main>


        <div class="main_nadp">
            <h1 class="baner eleAnim"><a id ="home" >Ласкаво просимо до барбершопа та татуювання</a></h1>
            <a href="#" class="open knopka_main">WELCOME</a>
        </div>
        
        <div class="nadp_kart" id = "fonz1">
            <div class="text_kart">
                <div class="lefts eleAnim kartuns1">
                    <img src="img\place.jpg"  alt="Barbershop" title="Barbershop" class="size_photo">
                </div>

                <div class="rights">
                    <h1><a id="about">Про нас</a></h1>
                    <p class="eleAnim"> 
                    Якщо вам потрібен якісний, комфортний, стильний та сучасний барбершоп - це адреса до нашого закладу. Ми розуміємось у нашій справі і знаємо що результат нашої роботи є найважливішим для клієнта, тому професійна робота майстра є важливим фундаментом у вашому повсякденному стилі!
                    </p>
                    <p class="eleAnim">Наші майстри підберуть для вас стильну стрижку враховуючи тип вашого волосся та будову голови. Розповімо поради за доглядом волосся і підтримку його у гарному стані.
                                       Укладка волосся та бороди застосовується сучасними технологіями та брендовими засобами, відповідно результат відмінний.</p>
                    <p class="eleAnim">Сертифіцировані тату майстри відобразять малюнок у різних стилях. Ми маємо індивідуальний підхід до кожного нашого клієнта та доступні ціни на різний смак.</p>
                </div>

            </div>
        </div>


        <div class="teams" id = "fonz2">
            <h1><a id="comand">НАША КОМАНДА</a></h1>
            <div class="team_kartuns eleAnim">
                <div class="kartuns">
                    <div class="photo"> <img src="img/bar_4.jpg" alt="barber" title="ХОЛОДОВ ІЛЛЯ"></div>
                    <h4 class="name">ІЛЛЯ</h4>
                    <p class="profesion">Барбер</p>
                </div>

                <div class="kartuns">
                    <div class="photo"><img src="img/bar_2.jpg" alt="barber" title="ДОРОФТІЙ ДМИТРО"></div>
                    <h4 class="name">Дмитро</h4>
                    <p class="profesion">Барбер</p>
                </div>

                <div class="kartuns">
                    <div class="photo"><img src="img/bar_3.jpg" alt="barber" title="КРОТ МАРІЯ"></div>
                    <h4 class="name">МАРІЯ</h4>
                    <p class="profesion">Тату майстер</p>
                </div>
            </div>


            <div class="team_kartuns eleAnim">
                <div class="kartuns">
                    <div class="photo"> <img src="img/bar_7.jpg" alt="barber" title="РАБДЄЄВА АНАСТАСІЯ"></div>
                    <h4 class="name">АНАСТАСІЯ</h4>
                    <p class="profesion">Тату майстер</p>
                </div>

                <div class="kartuns">
                    <div class="photo"><img src="img/bar_5.jpg" alt="barber" title="КАРАВАЄВ ДЕНИС"></div>
                    <h4 class="name">ДЕНИС</h4>
                    <p class="profesion">Барбер</p>
                </div>

                <div class="kartuns">
                    <div class="photo"><img src="img/bar_6.jpg" alt="barber" title="ГАВАМ ПУР МАХМУД"></div>
                    <h4 class="name">МАХМУД</h4>
                    <p class="profesion">Барбер</p>
                </div>
            </div>

          </div>
        </div>



                          <div class = "works_man" id = "fonz3">
                            <h1><a id="galery">ГАЛЕРЕЯ</a></h1>
                            <div class = "phto_gel"> 
                  
                            <div class = "imges1">
                                   <img   src = "img/bar_t1.jpg" alt = "Phto_Barbershop1">  
                                   <img   src = "img/bar_gal1.jpg" alt = "Phto_Barbershop2">
                                   <img   src = "img/bar_gal4.jpg" alt = "Phto_Barbershop3">
                                   <img   src = "img/bar_t2.jpg" alt = "Phto_Barbershop4">
                            </div>

                            <div class = "imges2">
                                  <img   src = "img/bar_gal3.jpg" alt = "Phto_Barbershop5">
                                  <img   src = "img/bar_gal1b.jpg" alt = "Phto_Barbershop6">
                                  <img   src = "img/bar_gal6.jpg" alt = "Phto_Barbershop7">
                                  <img   src = "img/bar_gal3.jpg" alt = "Phto_Barbershop8">
                            </div>

                            <div class = "imges3">
                                  <img  src = "img/bar_gal7.jpg" alt = "Phto_Barbershop9">
                                  <img  src = "img/bar_gal8.jpg" alt = "Phto_Barbershop10">
                                  <img  src = "img/bar_gal9.jpg" alt = "Phto_Barbershop11">
                                  <img  src = "img/bar_gal3.jpg" alt = "Phto_Barbershop12">
                            </div>

                            </div>
                          </div>

                          



                  <div class="prices" id = "fonz4"><h1><a id="price">Прайс-лист</a></h1>

                    <table class="table_1">

                        <tr class = "tab_h">
                            <th>Послуги</th>
                            <th>Барбер</th>
                            <th>Барбер + </th>
                        </tr>

                        <tr class="eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[0];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[0],$currencys[0];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[0],$currencys[0];
                          ?>

                            </td>

                        </tr>

                        <tr class="color_tabe eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[1];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[1],$currencys[1];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[1],$currencys[1];
                          ?>

                            </td>

                        </tr>

                        <tr class="eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[2];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[2],$currencys[2];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[2],$currencys[2];
                          ?>

                            </td>

                        </tr>

                        <tr class="color_tabe eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[3];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[3],$currencys[3];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[3],$currencys[3];
                          ?>

                            </td>

                        </tr>

                        <tr  class="eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[4];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[4],$currencys[4];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[4],$currencys[4];
                          ?>

                            </td>

                        </tr>

                        <tr class="color_tabe eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[5];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[5],$currencys[5];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[5],$currencys[5];
                          ?>

                            </td>

                        </tr>

                        <tr class="eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[6];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[6],$currencys[6];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[6],$currencys[6];
                          ?>

                            </td>

                        </tr>

                        <tr class="color_tabe eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[7];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[7],$currencys[7];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[7],$currencys[7];
                          ?>

                            </td>

                        </tr>

                        <tr class="eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[9];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[9],$currencys[9];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[9],$currencys[9];
                          ?>

                            </td>

                        </tr>

                        <tr class="color_tabe eleAnim">
                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $names[8];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices[8],$currencys[8];
                          ?>

                            </td>

                            <td>

                            <?php
                            include 'php/connect.php';
                            echo $prices1[8],$currencys[8];
                          ?>

                            </td>

                        </tr>

                    </table>

                    </div>

                          <div class = "main_konts" id = "fonz5">
                           <div class="nadp_kart">
                            <div class = "blok_konts">

                                <div class ="blok">
                                  <h4 class = "namer">АДРЕСА</h4>
                                  <p class = "eleAnim">Вул. Київська 10,</p>
                                  <p class = "eleAnim">г. Житомир, Україна</p>
                                </div>

                                <div class ="blok">
                                  <h4 class = "namer"><a id="contact">КОНТАКТИ</a></h4>
                                  <p class = "eleAnim">Київстар: 0987082662</p>
                                  <p class = "eleAnim">Водафон: 0667032622</p>
                                </div>

                                <div class ="blok">
                                  <h4 class = "namer">Графік</h4>
                                  <p class = "eleAnim">Пн-Пт: 21:00-19:00</p>
                                  <p class = "eleAnim">Сб-Нд: 21:00-15:00</p>
                                </div>
                                
                            </div>
                            </div>
                          </div>
                          



                          <!--<div id = "maps"></div>-->
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.9118405860168!2d28.660355415375182!3d50.25623080922185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472c6496a1d6667b%3A0x217c354a2bdc0482!2z0JrQuNC10LLRgdC60LDRjyDRg9C7LiwgMTAsINCW0LjRgtC-0LzQuNGALCDQltC40YLQvtC80LjRgNGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAxMDAwMQ!5e0!3m2!1sru!2sua!4v1652299118468!5m2!1sru!2sua" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                          
    </main>


    <footer>
      <div class = "nadp_kart">
      <div class = "Socl">
          <a href = "https://www.facebook.com/" ><img src="img/facebook.png" alt="facebook" title = "facebook"></a>
          <a href = "https://www.instagram.com/"><img src="img/instagram.png" alt="instagram" title = "instagram"></a>
          <a href = "https://telegram.com/" >    <img src="img/telegram.png" alt="telegram" title = "telegram"></a>
        </div>
      </div>

    
    </footer>



    <script src="javascript/script.js"></script>
    <script src="javascript/scrolling.js"></script>
    <script src="javascript\register.js"></script>
    <!--<script src="javascript/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkzRpRRJFb2T0IxVduG4VqxfML0i7R5Cw&callback=initMap"async defer></script>-->


</body>
</html>