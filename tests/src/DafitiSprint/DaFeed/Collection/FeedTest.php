<?php

namespace DafitiSprint\DaFeed\Collection;

use DafitiSprint\DaFeed\Entity;

class FeedTest extends \PHPUnit_Framework_TestCase
{
    private $collection;

    public function setUp()
    {
        $this->collection = new Feed();
    }

    public function tearDown()
    {
        $this->collection = null;
    }

    public function testCollectionShouldBeEmpty()
    {
        $this->assertEquals(0, $this->collection->count());
    }

    public function testColletionShouldOnlyAllowFeedEntities()
    {
        $entity = new Entity\Feed('title', 'http://www.google.com');

        $this->collection->attach($entity);

        $this->assertCount(1, $this->collection);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testShouldThrowAnExceptionWhenEntityIsInvalid()
    {
        $this->colletion->attach(new stdClass());
    }
}
