<?php

declare(strict_types=1);

namespace Apfl\ContaoComponentsBundle\Library;

/**
 * @throws InvalidArgumentException
 */
class MessageGenerator
{
    public function sayHelloTo(string $target): string
    {
        if (empty($target)) {
            throw new \InvalidArgumentException('Target must not be empty.');
        }

        $message = 'Hello '.$target;

        return $message;
    }
}