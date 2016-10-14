<?php

/**
 * Created by PhpStorm.
 * User: script972
 * Date: 14.10.2016
 * Time: 15:12
 */
class Model
{
    public function  DB_Connect()
    {
        $link = mysql_connect('', '', '','')
        or die('Didn`t coonect: ' . mysql_error());
        echo 'connected';

    }


}