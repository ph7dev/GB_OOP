<?php

/**
 * Created by PhpStorm.
 * User: slim
 * Date: 20.04.2016
 * Time: 21:46
 */
class Config
{
    /**
     * @var array
     */
    protected static $_settings = array();

    /**
     * @param $key
     * @return null
     */
    public function get ($key){
        return isset(self::$_settings[$key]) ? self::$_settings[$key] : null;
    }

    /**
     * @param $key
     * @param $value
     */
    public static function set ($key, $value){
        self::$_settings[$key] = $value;
    }
}