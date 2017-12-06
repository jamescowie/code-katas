<?php
require_once 'vendor/autoload.php';
require_once 'Shortest.php';

use PHPUnit\Framework\TestCase;

class ShortestTest extends  TestCase
{
    public function testBasics() {
        $this->assertEquals(findShort("bitcoin take over the world maybe who knows perhaps"), 3);
        $this->assertEquals(findShort("turns out random test cases are easier than writing out basic ones"), 3);
    }
}
