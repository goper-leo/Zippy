<?php

namespace Alchemy\Zippy\Tests;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    public static function getResourcesPath()
    {
        return __DIR__ . '/../../../resources';
    }

    protected function getResourceManagerMock()
    {
        return $this
            ->getMockBuilder('Alchemy\Zippy\Resource\ResourceManager')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function getResource($data)
    {
        $resource = $this->getMock('Alchemy\Zippy\Adapter\Resource\ResourceInterface');

        $resource->expects($this->any())
            ->method('getResource')
            ->will($this->returnValue($data));

        return $resource;
    }
}
