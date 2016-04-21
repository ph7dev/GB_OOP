<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 20.04.2016
 * Time: 21:35
 */

require_once "./lib/autoload.php";


if (!empty($_POST['comment'])){

    $handle = Config::get("dataFile");

    $data = "|".$_POST['name']."|".$_POST['comment']."|".time()."|\n";

    $writeComment = new File();

    if ($resultWrite = $writeComment->addComment($handle,$data)){

        $resWrite = new Result();

        $resWrite->set("done","Comment successfully added");
        header('Location: index.php');
    }else{
        echo $result = "Error. Comment not added";
        header('Location: index.php');
    }
}