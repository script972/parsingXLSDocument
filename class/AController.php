<?php

/**
 * Created by PhpStorm.
 * User: script972
 * Date: 12.10.2016
 * Time: 23:33
 */
abstract class AController
{
    public $conig;

    public function __construct() {
        $this->config = new Config;
    }
}