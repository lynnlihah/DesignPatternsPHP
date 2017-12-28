<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\Bicyle;
use DesignPatterns\Creational\SimpleFactory\SimpleFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase{

	public function testCanCreateBicyle(){

		$bicycle = (new SimpleFactory())->createBicyle();
		$this->assertInstanceOf(Bicyle::class, $bicycle);
	}
}