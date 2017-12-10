<?php
declare(strict_types=1);
/**
 * This file is part of the Standard Library Type package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary\Helpers;

use StandardLibrary\Exceptions\ImmutableMethodCallException;

/**
 * Helper trait to implement immutable arrays
 *
 * Implements two basic methods to prevent accidental or implicit modification
 * of an arrays properties.
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 */
trait ImmutableArrayHelperMethods
{
    /**
     * Prevent implicit setting of properties
     *
     * @see http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param string $property - Property name to set
     * @param mixed $value - Mixed value to set property to
     * @return void
     * @throws ImmutableMethodCallException - Always throws an exception
     */
    final public function offsetSet($property, $value)
    {
        throw new ImmutableMethodCallException;
    }

    /**
     * Prevent implicit unsetting of properties
     *
     * @see http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param string $property - Property name to unset
     * @return void
     * @throws ImmutableMethodCallException - Always throws an exception
     */
    final public function offsetUnset($property)
    {
        throw new ImmutableMethodCallException;
    }
}
