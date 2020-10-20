<?php


$su_un=$_POST['su_username'];
$su_eadd=$_POST['su_eaddress'];
$su_pasw=$_POST['su_password'];

echo 'Пользователь: ' . $su_un . '<br>E-mail адрес: ' . $su_eadd . '<br>Пароль: ' . $su_pasw;

if (empty($su_un) || empty($su_eadd) ||empty($su_pasw)) {
	echo "<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>Одно или несколько полей формы пустые";
	header('Refresh: 5; url=http://localhost/views/sign_up.php');
}

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    //Вставляем данные, подставляя их в запрос
    $sql = "INSERT INTO user (username, email , password) VALUES ('{$_POST["su_username"]}', '{$_POST["su_eaddress"]}','{$_POST["su_password"]}');";
    //Если вставка прошла успешно
    if (mysqli_query($conn, $sql)) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
      echo "INSERT INTO user (username, email , password) VALUES ('{$_POST["su_username"]}', '{$_POST["su_eaddress"]}','{$_POST["su_password"]}');";
    }
  

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["username"]. " " . " - Password: " . $row["password"] . " - Email: " . $row["email"] . "<br> -----<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
