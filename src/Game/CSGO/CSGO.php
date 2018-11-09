<?php

/**
 * Created by PhpStorm.
 * User: Liuxuanzhi
 * Date: 2018/11/9
 * Time: 15:45
 */
class CSGO
{
    private static $NAME = 'CSGOer';

    public function __construct()
    {
        return 'CN CSGO best CSGO!!!';
    }

    public function __call($name, $arguments)
    {
        return self::$NAME;
    }
}