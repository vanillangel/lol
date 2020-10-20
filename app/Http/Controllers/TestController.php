<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show_signin()
		{
			$si_un=$_POST['si_username'];
$si_pasw=$_POST['si_password'];
echo 'Пользователь: ' . $si_un . '<br>Пароль: ' . $si_pasw;

if (empty($si_un)||empty($si_pasw)) {
	echo "<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>Одно или несколько полей формы пустые";
	header('Refresh: 5; url=http://localhost/views/sign_in.php');
}

			
		}

		    public function show_signup()
		{
$su_un=$_POST['su_username'];
$su_eadd=$_POST['su_eaddress'];
$su_pasw=$_POST['su_password'];

echo 'Пользователь: ' . $su_un . '<br>E-mail адрес: ' . $su_eadd . '<br>Пароль: ' . $su_pasw;

if (empty($su_un) || empty($su_eadd) ||empty($su_pasw)) {
	echo "<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>!!!ATTENTION!!!<br>Одно или несколько полей формы пустые";
	header('Refresh: 5; url=http://localhost/views/sign_up.php');
}
			
		}
}
