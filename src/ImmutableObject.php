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

use StandardLibrary\Contracts\Type\ImmutableType;
use StandardLibrary\Helpers\ImmutableObjectHelperMethods;

/**
 * Immutable object
 *
 * This abstract class implements basic immutable functionaility. Any child
 * class would need to implement {@link Type::getType}.
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 *
 * @abstract
 * @uses ImmutableObjectHelperMethods
 */
abstract class ImmutableObject implements ImmutableType
{
    use ImmutableObjectHelperMethods;
}
