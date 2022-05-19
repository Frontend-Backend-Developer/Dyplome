<?php
set_time_limit(0);

// Соединиться с сервером БД
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "price_table";

// Выбрать БД
$connect = new mysqli($server_name, $user_name, $password, $db_name);

$sql = "SELECT * FROM `price list`";

// Вибираю всі значення із таблиці "main services"
$result = $connect->query($sql);

$names = array();
$prices = array();
$prices1 = array();
$currencys = array();

while ($row =  mysqli_fetch_array($result))
{
  $names[] = $row['name'];
  $prices[] = $row['price1']; 
  $prices1[] = $row['price2'];
  $currencys[] = $row['currency'];
}

//mysqli_fetch_array - Обробляє ряд результатів запиту, повертаючи асоціативний масив, чисельний масив або обидва 
/* Выводит всю таблицу ниже
while($row = mysqli_fetch_array($result))
{
    $id=$row['id'];
    $name=$row['name'];
    $price=$row['price'];
    $currency=$row['currency'];

    echo "<p>$id - $name - $price - $currency</p>";
}
*/

// Закрити БД
$connect->close();

?>
