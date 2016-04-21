<?php

/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 21.04.2016
 * Time: 11:31
 */

class File implements iFile
{
    public function displayComment($handle)
    {
        // TODO: Implement displayComment() method.

        $data = file_get_contents($handle);
        $arr = explode('|', $data);
        return $arr;
    }

    public function addComment($handle, $text)
    {
        // TODO: Implement addComment() method.

        if (file_exists($handle)){
            if (file_put_contents($handle, $text, FILE_APPEND)){
                return true;
            }else{
                return false;
            }
        }else{
            return $err = "file doesn't exist";
        }
    }

    public function editComment()
    {
        // TODO: Implement editComment() method.
    }
}