<?php

/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 21.04.2016
 * Time: 12:22
 */
class Result
{
    /**
     * @var array
     */
    private $result = array();

    /**
     * @param $key
     * @return null
     */
    public function get ($key){
        return isset($this->result[$key]) ? $this->result[$key] : 'null';
    }

    /**
     * @param $key
     * @param $value
     */
    public function set ($key, $value){
        $this->result[$key] = $value;
    }
}