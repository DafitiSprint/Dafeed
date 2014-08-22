<?php

namespace DafitiSprint\DaFeed\Entity;

class FeedTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldGetTitle() 
    {
        $feed = new Feed('test', 'http://ddg.gg');
        $this->assertEquals('test', $feed->getTitle());
    }

    public function testShouldGetUrl()
    {
        $feed = new Feed('title', 'http://www.dafiti.com.br');
        $this->assertEquals('http://www.dafiti.com.br', $feed->getUrl());
    }

    public function testShouldGetCreatedAtDefaultValue()
    {
        $feed = new Feed('title', 'http://www.dafiti.com.br');
        $this->assertInstanceOf('DateTime', $feed->getCreatedAt());
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Invalid url. 
     */
    public function testShouldThrowExceptionWhenInvalidUrl()
    {
        $feed = new Feed('title', '...');
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testShouldThrowExceptionWhenTitleIsEmpty()
    {
        $feed = new Feed('', 'http://www.dafiti.com.br');
    }

}
