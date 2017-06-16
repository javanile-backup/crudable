<?php

namespace Javanile\Crudable\Tests;

use Javanile\Producer;
use PHPUnit\Framework\TestCase;
use Javanile\Crudable\Crudable;

Producer::addPsr4([
    'Javanile\Crudable\\' => __DIR__.'/../src',
    'Javanile\Crudable\\Tests\\' => __DIR__,
]);

final class CrudableTest extends TestCase
{
    public function testCliStaticMethod()
    {
        $object = new Crudable();
        $this->assertInstanceOf('Javanile\Crudable\\Crudable', $object);

        $output = "Hello World!";
        $this->assertRegexp('/World/i', $output);
    }
}
