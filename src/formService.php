<?php

namespace mderakhshi\formBuilder;



class formService {
	private array  $forms;
	private string $lastForm;
	private array  $elements = [
		'inputText' => \mderakhshi\formBuilder\Elements\InputText::class,
	];
	
	public function __call($name, $arguments)
	{
		// TODO: Implement __call() method.
	}
	
	public function build(array $property)
	{
		if (!array_key_exists('name', $property)) {
			throw new \Exception('the form builder class haven\'t property name.', '400');
		}
		$this->lastForm               = $property['name'];
		$this->forms[$this->lastForm] = (array)$property['property'] ?? [];
	}
	
}
