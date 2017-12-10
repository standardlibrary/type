<?php
declare(strict_types=1);
/**
 * This file is part of the Standard Library Type package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Exceptions;

use BadMethodCallException;

/**
 * Exception thown when trying to mutate an immutable object
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @final
 */
final class ImmutableMethodCallException extends BadMethodCallException
{
    /**
     * @var string
     */
    protected $message = 'Cannot change property of immutable object';
}
