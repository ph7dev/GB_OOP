<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 20.04.2016
 * Time: 21:37
 */

/**
 * Виндовый разделитель \ - обратный слэш
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * полный путь к ROOT папке
 * просто __FILE__ возвращает полный путь к файлу в котором использ. маг. константа
 * 1й dirname возвращает полный путь к каталогу где лежит файл в котором использ. маг. константа
 * 2й dirname возвращает путь на уровень выше папки /config
 */
define('ROOT',dirname(dirname(__FILE__)));




Config::set('test',"Yahoooo");
Config::set('login', 'bz4work');

