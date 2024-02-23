<?php

class Article
{
    public $title;

    public $content;

    private $published = 'false';

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish()
    {
        $this->published = 'true';
    }

    public function isPublished()
    {
        return $this->published;
    }
}

$article1 = new Article('title1', 'content1');

$article2 = new Article('title2', 'content2');

$article1->publish();

$article1->isPublished();
$article2->isPublished();

var_dump($article1);
var_dump($article2);
