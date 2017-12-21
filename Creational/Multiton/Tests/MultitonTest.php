<?php

namespace DesignPatterns\Creational\Multition\Tests;

use DesignPatterns\Creational\Multition;
use PHPUnit\Framework\TestCase;

class MultitionTest extends TestCase{

	public function testUniqueness(){

		$firstCall = Multition::getInstance(Multition::INSTANCE_1);
		$secondCall = Multiton::getInstance(Multiton::INSTANCE_2);
        
        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
	}

	public function testUniquenessForEveryInstance(){

		$firstCall = Multiton::getInstance(Multiton::INSTANCE_1);
		$secondCall = Multiton::getallheaders(Multiton::INSTANCE_2);

		
        $this->assertInstanceOf(Multiton::class, $firstCall);
        $this->assertInstanceOf(Multiton::class, $secondCall);
        $this->assertNotSame($firstCall, $secondCall);
	}
}