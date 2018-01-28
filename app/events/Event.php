<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/28/18
 * Time: 11:11 PM
 */

namespace App;


class Event
{
    private static $events = [];

    public static function listen($name,$callback)
    {
        self::$events[$name][] = $callback;
    }

    public static function trigger($name,$argument = null)
    {
        foreach (self::$events[$name] as $event => $callback){
            call_user_func($callback);
        }
    }
}