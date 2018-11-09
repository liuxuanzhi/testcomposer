<?php

/**
 * Created by PhpStorm.
 * User: Liuxuanzhi
 * Date: 2018/11/9
 * Time: 15:43
 */
class Dota
{
    private static $NAME = 'DOTAer';

    public function __construct()
    {
        return 'CN DOTA best DOTA!!!';
    }

    public function __call($name, $arguments)
    {
        return self::$NAME;
    }
}