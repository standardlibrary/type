<?php
declare(strict_types=1);
/**
 * This file is part of the Standard Library Type package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

namespace StandardLibrary;

use ArrayAccess;
use StandardLibrary\Contracts\Type\ImmutableType;
use StandardLibrary\Helpers\ImmutableArrayHelperMethods;
use StandardLibrary\Helpers\ImmutableObjectHelperMethods;

/**
 * Immutable ArrayType object
 *
 * This abstract class implements basic immutable functionaility for an object
 * that can be accessed as an array. There are three methods to implement in any
 * child classes, {@link ArrayAccess::offsetGet},
 * {@link ArrayAccess::offsetExists} and {@link ArrayAccess::getType}.
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 *
 * @abstract
 * @uses ImmutableArrayHelperMethods
 * @uses ImmutableObjectHelperMethods
 */
abstract class ImmutableArrayTypeObject implements ImmutableType, ArrayAccess
{
    use ImmutableArrayHelperMethods, ImmutableObjectHelperMethods;
}
