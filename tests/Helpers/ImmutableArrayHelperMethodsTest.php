<?php
declare(strict_types=1);
/**
 * This file is part of the Standard Library Type package.
 * For the full copyright information please view the LICENCE file that was
 * distributed with this package.
 *
 * @copyright Simon Deeley 2017
 */

use PHPUnit\Framework\TestCase;
use StandardLibrary\Helpers\ImmutableArrayHelperMethods;

/**
 * Test ImmutableArrayHelperMethods
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @uses StandardLibrary\Helpers\ImmutableArrayHelperMethods
 */
final class ImmutableArrayHelperMethodsTest extends TestCase
{
    /**
     * Test ImmutableArrayHelperMethods prevents setting offsets
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenOffsetSetIsCalled(): void
    {
        $object = $this->getMockForTrait(ImmutableArrayHelperMethods::class);

        $object->offsetSet('foo', 'test');
    }

    /**
     * Test ImmutableArrayHelperMethods prevents calling offsetUnset
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenOffsetUnsetIsCalled(): void
    {
        $object = $this->getMockForTrait(ImmutableArrayHelperMethods::class);

        $object->offsetUnset('foo');
    }
}
