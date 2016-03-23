<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 22.03.2016
 * Time: 23:17
 */


// обработка логинимся
session_start();

// адресс возврата
$head = 'Location:'.$_SESSION['ReturnAdress'];

// данные пользователей
$Login = array(
    "vahtang" => "vahtang",
);


// убираем сообщение об ошибке если есть
 if (isset($_SESSION['MessageError'])) {unset($_SESSION['MessageError']);}

// проверка метода передачи
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    $_SESSION['MessageError']= 'Метод отправки не верен';
    header( $head );
    exit();
}



// проверка наличия имени и пароля
if (!isset($_POST['name'], $_POST['password']) ){
    $_SESSION['MessageError'] = " Не отправлены  имя или пароль";
    header( $head );
    exit();
}

// проверяем ввод имени и пароля
if ($_POST['name'] == '' || $_POST['password'] == ''){
    $_SESSION['MessageError'] = " Не указано имя или пароль";
    header( $head );
    exit();
}

// проверка наличия имени в базе пользователей
if (!isset($Login [$_POST['name']])){
    $_SESSION['MessageError'] = " Ваше имя не найдено в базе";
    header( $head );
    exit();
}

// проверка совпадения пароля
elseif ($Login [$_POST['name']] == $_POST['password']){
    $_SESSION ['logged_in_as']= $_POST['name'];
}
else{
    $_SESSION['MessageError'] = " Пароль введен не верно ";
//    header( $head );
}
header( $head );
exit();

