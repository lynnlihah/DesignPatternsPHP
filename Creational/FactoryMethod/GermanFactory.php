<?php

namespace DesignPatterns\Creational\FactoryMethod;

class GermanFactory extends FactoryMethod{

	protected function createVehicle(string $type): VehicleInterface{

		switch($type){

			case parent::CHEAP：
				return new Bicycle();

			case parent::FAST:
				$carMercedes = new carMercedes();
				$carMercedes->AddAMGTuning();

				return $carMercedes;

			default:
				throw new \InvalidArgumentException("$type is not a valid vehicle");
		}
	}
}