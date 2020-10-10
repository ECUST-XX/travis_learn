<?php
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
	public function testIndex()
	{
		$this->assertEquals('hello travis ci','hello travis ci');
	}
}


