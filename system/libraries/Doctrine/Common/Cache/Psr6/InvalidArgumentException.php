<?php

namespace Doctrine\Common\Cache\Psr6\Cache;

/**
 * Exception interface for invalid cache arguments.
 *
 * Any time an invalid argument is passed into a method it must throw an
 * exception class which implements Doctrine\Common\Cache\Psr6\Cache\InvalidArgumentException.
 */
interface InvalidArgumentException extends CacheException
{
}
