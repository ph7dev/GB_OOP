<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 21.04.2016
 * Time: 12:40
 */
//require_once "./lib/autoload.php";

$data = new File();
$config = new Config();

$handle = $config->get("dataFile");

$arr = $data->displayComment($handle);