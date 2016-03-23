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


if (!isset($_SESSION['logged_in_as'])){
    include_once ROOT_DIR . DS . 'form' . DS .'login.php';
}
else {
    echo 'Здраствуйту ' . $_SESSION['logged_in_as'];
}
die();
// дальще задание 2


echo '<pre>';
var_dump(__DIR__);

var_dump(__FILE__);
var_dump(dirname(__FILE__));
var_dump(DIRECTORY_SEPARATOR);