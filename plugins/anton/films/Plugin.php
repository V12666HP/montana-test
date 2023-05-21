<?php

namespace Anton\Films;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
			'anton\Films\Components\Cards' => 'cards'
		];
	}

	public function registerSettings()
	{
	}
}
