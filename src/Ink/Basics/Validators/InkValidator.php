<?php namespace Ink\Basics\Validators;

use Ink\Basics\Contracts\InkValidatorInterface;
 
abstract class InkValidator implements InkValidatorInterface {
	
	/**
	 * Validation values
	 *
	 * @var array
	 */
	protected $values = array();
	
	/**
	 * Validation rules
	 *
	 * @var array
	 */
	protected $rules = array();
	
	/**
	 * Validation errors
	 */
	protected $errors;

	/**
	 * Construct new validator
	 * 
	 * @param array $input
	 * @return bool
	 */
	public function __construct(array $values = array())
	{
		$this->values = $values;
	}

	/**
	 * Get validation passes
	 * 
	 * @return bool
	 */
	public function passes()
	{
		$validation = \Validator::make($this->values, $this->getRules());
		
		if($validation->passes()) return true;
		
		$this->errors = $validation->messages();
		
		return false;
	}

	/**
	 * Get validation values
	 * 
	 * @return array
	 */
	public function getValues()
	{
		return $this->values;
	}

	/**
	 * Get validation rules
	 * 
	 * @return array
	 */
	public function getRules()
	{
		return $this->rules;
	}

	/**
	 * Get validation errors
	 * 
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	 * Set validation values
	 * 
	 * @return array
	 */
	public function setValues(array $values = array())
	{
		$this->values = $values;
		return $this;
	}

	/**
	 * Set validation rules
	 * 
	 * @return array
	 */
	public function setRules(array $rules = array())
	{
		$this->rules = $rules;
		return $this;
	}
	
}