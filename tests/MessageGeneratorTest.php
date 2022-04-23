<?php

declare(strict_types=1);

namespace Apfl\ContaoComponentsBundle\Tests;

use Apfl\ContaoComponentsBundle\Library\MessageGenerator;
use PHPUnit\Framework\TestCase;

class MessageGeneratorTest extends TestCase
{
    public function testCanSayHelloToWorld()
    {
        $messageGenerator = new MessageGenerator();

        $message = $messageGenerator->sayHelloTo('World');

        $this->assertSame('Hello World', $message);
    }

    public function testCanNotSayHelloToEmptyTarget()
    {
        $messageGenerator = new MessageGenerator();

        $this->expectException(\InvalidArgumentException::class);

        $message = $messageGenerator->sayHelloTo('');
    }
}