<?php

/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 21.04.2016
 * Time: 11:32
 */
interface iFile
{
    /**
     * вывод коментов на экран
     * @return mixed
     */
    function displayComment($handle);

    /**
     * добавление коментов в файл
     * @return mixed
     */
    function addComment($handle, $text);

    /**
     * изменение существующих коментов
     * @return mixed
     */
    function editComment();
}