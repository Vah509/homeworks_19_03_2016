<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 22.03.2016
 * Time: 22:56
 */

// запоминаем адресс возврата
$_SESSION['ReturnAdress'] = $_SERVER{'PHP_SELF'};

// печатаем ошибки лагина
if (isset($_SESSION['MessageError'])) {
    echo 'Error : ' . $_SESSION['MessageError'] . '<br>';
}

// подключаем форму логина
include_once  ROOT_DIR . DS .'form'. DS .'login.html';