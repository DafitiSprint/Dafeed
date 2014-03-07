<?php

namespace DafitiSprint\DaFeed\Entity;

class Feed {

    private $title;
    private $url;
    private $createdAt;

    public function __construct($title, $url)
    {
        $this->setTitle($title);
        $this->setUrl($url);
        $this->createdAt = new \DateTime();
    }

    private function setUrl($url)
    {
        if (false === filter_var($url, FILTER_VALIDATE_URL)) {
            throw new \InvalidArgumentException('Invalid url.', 1);
        }

        $this->url = $url;
    }

    private function setTitle($title)
    {
        if (empty($title)) {
            throw new \InvalidArgumentException('Invalid title.', 2);
        }

        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }

    
}
