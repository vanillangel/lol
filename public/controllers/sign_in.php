<?php

$si_un=$_POST['si_username'];
$si_pasw=$_POST['si_password'];
echo 'Пользователь: ' . $si_un . '<br>Пароль: ' . $si_pasw;

if (empty($si_un)||empty($si_pasw)) {
	echo "<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>Одно или несколько полей формы пустые";
	header('Refresh: 5; url=http://localhost/views/sign_in.php');
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


$sql = "SELECT * FROM user WHERE username='{$_POST["si_username"]}' AND password='{$_POST["si_password"]}'";
    if (mysqli_query($conn, $sql)) {
      echo '<p>Вход осуществлен</p>';
      $sql = "SELECT * FROM user WHERE username='{$_POST["si_username"]}' AND password='{$_POST["si_password"]}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["username"]. " " . " - Password: " . $row["password"] . " - Email: " . $row["email"] . "<br> -----<br>";
  }
} else {
  echo "Ошибка!!! Пользователь или пароль введен неверно ";
  header('Refresh: 5; url=http://localhost/views/sign_in.php');
}
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
  
/*
$sql = "SELECT * FROM user WHERE username='{$_POST["si_username"]}'";
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
