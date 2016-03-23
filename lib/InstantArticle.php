<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 22.03.2016
 * Time: 21:59
 */
session_start();
if (!isset($_SESSION['logged_in_as'])){

}
echo '<pre>';
var_dump(__DIR__);

var_dump(__FILE__);
var_dump(dirname(__FILE__));