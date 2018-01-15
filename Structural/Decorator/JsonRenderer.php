<?php

namespace DesignPatterns\Structural\Decorator;

class JsonRenederer extends RendererDecorator{

	public function renerData(): string{

		return json_encode($this->wrapped->renderData());
	}
}