<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 20.04.2016
 * Time: 22:03
 */

require_once "/../config/config.php";

/**
 * @param $class_name
 * @return string
 */
function __autoload ($class_name){

//    require_once "/../class/".strtolower($class_name).".class.php";
    $classes = ROOT.DS."class".DS.strtolower($class_name).".class.php";
//    echo $classes;

    if (file_exists($classes)){
       require_once "$classes";
    }else{
        return "Файл $class_name не существует.";
    }

}