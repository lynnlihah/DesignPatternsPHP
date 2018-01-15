<?php

namespace DesignPatterns\Structural\Facade;

interface BiosInterface{

	public function execute();

	public function waitForKeyPress();

	public function lauch(OsInterface $os);

	public function powerDown();
}