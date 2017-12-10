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
use StandardLibrary\Helpers\ImmutableObjectHelperMethods;

/**
 * Test ImmutableObjectHelperMethods
 *
 * @author Simon Deeley <simondeeley@users.noreply.github.com>
 * @uses StandardLibrary\Helpers\ImmutableObjectHelperMethods
 */
final class ImmutableObjectHelperMethodsTest extends TestCase
{
    /**
     * Test ImmutableObjectHelperMethods prevents setting properties
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenMagicSetIsCalled(): void
    {
        $object = $this->getMockForTrait(ImmutableObjectHelperMethods::class);

        $object->foo = 'test';
    }

    /**
     * Test ImmutableObjectHelperMethods prevents unsetting properties
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenMagicUnsetIsCalled(): void
    {
        $object = $this->getMockForTrait(ImmutableObjectHelperMethods::class);

        unset($object->foo);
    }
}
