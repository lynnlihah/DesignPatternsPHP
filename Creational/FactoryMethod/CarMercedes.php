<?php

namespace DesingPatterns\Creational\FactoryMethod;

class CarMercedes implements VehicleInterface{

	/**
	 * @var string
	 */
	private $color;

	public function setColor(string $rgb){

		$this->color = $rgb;
	}

	public function addAMGTuning(){

		//
	}
}