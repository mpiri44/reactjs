<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/27/18
 * Time: 3:58 PM
 */

class UserFactory
{
    public static function Create($id)
    {
        return new User($id);
    }
}