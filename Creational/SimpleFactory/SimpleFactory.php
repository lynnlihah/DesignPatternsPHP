<?php

namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory{

	public function createBicycle(): Bicyle{

		return new Bicyle();
	}
}