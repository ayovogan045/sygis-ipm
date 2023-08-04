<?php

namespace Doctrine\Common\Cache\Psr6;

use InvalidArgumentException;
use Doctrine\Common\Cache\Psr6\Cache\InvalidArgumentException as PsrInvalidArgumentException;

/**
 * @internal
 */
final class InvalidArgument extends InvalidArgumentException implements PsrInvalidArgumentException
{
}
