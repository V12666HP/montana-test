<?php

namespace anton\Films\Components;

use Cms\Classes\ComponentBase;
use anton\Films\Models\Film;

class Cards extends ComponentBase
{
	public function componentDetails()
	{
		return [
			'name' => 'Cards list',
			'description' => 'Cards list to display in section'
		];
	}

	public function defineProperties()
	{
		return [
			'results' => [
				'title' => "Id's of films",
				'description' => "Id's of films to display in section",
				'default' => '',
				'validationPattern' => '\d',
				'validationMessage' => "Enter id's of films",
				"required" => 'true'
			]
		];
	}

	public function onRun()
	{
		$this->cards = $this->loadCards();
	}

	protected function loadCards()
	{
		$query = Film::all();
		//$identifiers = explode(" ", $this->property('results'));
		
		//$query = $query->whereIn('id', [1, 2, 3])->get();

		// $query = $query->take($this->property('results'));

		// dd($query);
	}
	public $cards;
}
