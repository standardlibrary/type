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
use StandardLibrary\ImmutableArrayTypeObject;

/**
 * Test ImmutableArrayTypeObject
 *
 * @author Simon Deeley <s.deeley@icloud.com>
 * @uses StandardLibrary\ImmutableArrayTypeObject
 */
final class ImmutableArrayTypeObjectTest extends TestCase
{
    /**
     * Test ImmutableObject prevents setting properties
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenMagicSetIsCalled(): void
    {
        $object = $this->getMockForAbstractClass(ImmutableArrayTypeObject::class);

        $object->foo = 'test';
    }

    /**
     * Test ImmutableObject prevents unsetting properties
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenMagicUnsetIsCalled(): void
    {
        $object = $this->getMockForAbstractClass(ImmutableArrayTypeObject::class);

        unset($object->foo);
    }

    /**
     * Test ImmutableObject prevents setting offsets
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenOffsetSetIsCalled(): void
    {
        $object = $this->getMockForAbstractClass(ImmutableArrayTypeObject::class);

        $object['foo'] = 'test';
    }

    /**
     * Test ImmutableObject prevents calling offsetUnset
     *
     * @test
     * @expectedException StandardLibrary\Exceptions\ImmutableMethodCallException
     * @expectedMessage Cannot change property of immutable object
     * @final
     * @return void
     */
    final public function shouldThrowExceptionWhenOffsetUnsetIsCalled(): void
    {
        $object = $this->getMockForAbstractClass(ImmutableArrayTypeObject::class);

        unset($object['foo']);
    }
}
