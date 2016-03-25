<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 22.03.2016
 * Time: 21:55
 */

session_start();



define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', __DIR__);
// если клиент не залогинен перехд на форму авторизации

echo '<pre>';

// подключаем классы

function __autoload ($class) {
    include_once ROOT_DIR.DS.'lib'. DS. $class . '.php';
}

if (!isset($_SESSION['logged_in_as'])){
    include_once ROOT_DIR . DS . 'form' . DS .'login.php';
}
else {
    echo 'Здраствуйту ' . $_SESSION['logged_in_as'].'<br>';
}

// дальще задание 2

// получаем данные

//$Data = new Request;
//var_dump($Data);

//var_dump($Data ->data);
die();


