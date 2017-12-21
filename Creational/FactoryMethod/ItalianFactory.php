<?php

namespace DesignPatters\Creational\FactoryMethod;

class ItalianFactory extends FactoryMethod{

	protected function createVehicle(string $type): VechicleInterface{

		switch ($type){

			case parent::CHEAP:
				return new Bicycle();
			case parent::FAST:
				return new CarFerrai();
			default:
				throw new \InvalidArgumentException("$type is not a valid vehicle");
		}
	}
}