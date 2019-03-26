<?php

abstract class Book
{

    protected $title;
    protected $author;

    function __construct($t, $a)
    {
        $this->title = $t;
        $this->author = $a;
    }

    abstract protected function display();
}

//Write MyBook class

class MyBook
{
    protected $title;
    protected $author;
    protected $price;

    public function __construct($title, $author, $price)
    {
        $this->title = trim($title);
        $this->author = trim($author);
        $this->price = trim($price);
    }

    public function display()
    {
        print('Title: ' . $this->title) . PHP_EOL;
        print('Author: ' . $this->author) . PHP_EOL;
        print('Price: ' . $this->price) . PHP_EOL;
    }
}

$title = fgets(STDIN);