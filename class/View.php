<?php

/**
 * Created by PhpStorm.
 * User: script972
 * Date: 12.10.2016
 * Time: 22:14
 */
class View
{
    public function error($er)
        {
            echo  $er;

        }

    public function out($arr)
    {
        echo "<pre>";
        print_r($arr);
    }

}