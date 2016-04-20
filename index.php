<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 20.04.2016
* Time: 21:14
*/
require_once "./lib/autoload.php";

$config = new Config();
echo $config->get("test1");


?>

<form action="saveComment.php" method="post">
    Ваше имя: <input type="text" name="name"><br>
    Комментарий: <input type="text" name="coment"><br>
    <input type="submit" name="submit" value="go">

</form>
