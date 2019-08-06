<?php
use PHPUnit\Framework\TestCase;
require_once 'MyArray.php';

class MyArrayTest extends TestCase
{
    public function testNotEmpty()
    {
        $h = new MyArray();
        $c = $h -> getArray();

        $this->assertNotEmpty($c);
        $this->assertNotNull($c);
        $this->assertIsArray($c);
        $this->assertEquals(13, count($c));
        $this->assertCount(13, $c);
        $this->assertIsIterable($c);

        return $c;
    }

    /**
     * @depends testNotEmpty
     */
    public function testPush(array $c)
    {
        array_push($c, 'key4');
        $this->assertSame('key4', $c[count($c)-4]);
        $this->assertCount(14, $c);

        return $c;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $c)
    {
        $this->assertSame('key4', array_pop($c));
        $this->assertNotEmpty($c);
        $this->assertCount(13, $c);

    }

    /**
     * @depends testPush
     */
    public function testArrayHasKey(array $c)
    {
        $this->assertArrayHasKey('key3', $c);
        array_unshift($c, ['a'=>'red','b'=>"green"]);
        $this->assertArrayNotHasKey('key5', $c);
        $this->assertArrayHasKey('a', $c[0]);

        return $c;
    }

    /**
     * @depends testArrayHasKey
     */
    public function testContains(array $c)
    {
        $this->assertContains(['a'=>'red','b'=>"green"], $c);
        $this->assertArraySubset(['key1' => 'k'], $c);        //will be removed in PHPUnit 9.
        $this->assertCount(15, $c);
    }

    /**
     * @depends testArrayHasKey
     */
    public function testIsNotBool(array $c)
    {
        $this->assertIsNotBool($c);
    }
}
