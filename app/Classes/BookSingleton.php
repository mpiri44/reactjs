<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/27/18
 * Time: 4:16 PM
 */

class BookSingleton
{
    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title  = 'Design Patterns';
    private static $book = NULL;
    private static $isLoanedOut = FALSE;

    public function __construct()
    {
        if(self::$book == NULL)
            return $book = new BookSingleton();
        self::$isLoanedOut = TRUE;
    }
}