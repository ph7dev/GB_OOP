<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 20.04.2016
* Time: 21:14
*/
error_reporting(-1);
header ('Content-type: text/html; charset=utf-8');

require_once "./lib/autoload.php";

require_once "saveComment.php";

?>

<form action="index.php" method="post">
    Ваше имя: <input type="text" name="name" ><br>
    Комментарий: <input type="text" name="comment"><br>
    <input type="submit" name="submit" value="go">

</form>

<?php

$res = new Result();

echo $res->get("done");