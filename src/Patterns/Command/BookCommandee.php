<?php
namespace Patterns\Command;


class BookCommandee {
    private $author;
    private $title;

    public function __construct($author, $title){
        $this->author = $author;
        $this->title = $title;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setStarsOn(){
        $this->setAuthor(str_replace(' ', '*', $this->getAuthor()));
        $this->setTitle(str_replace(' ', '*', $this->getTitle()));
    }

    public function setStarsOff(){
        $this->setAuthor(str_replace('*', ' ', $this->getAuthor()));
        $this->setTitle(str_replace('*', ' ', $this->getTitle()));
    }

    function getAuthorAndTitle() {
        return $this->getTitle().' by '.$this->getAuthor();
    }
} 