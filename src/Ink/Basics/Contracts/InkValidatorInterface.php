<?php namespace Ink\Basics\Contracts;

interface InkValidatorInterface {
	
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
	 * @param null $input
	 * @return bool
	 */
	public function __construct(array $values = array());

	/**
	 * Get validation passes
	 * 
	 * @return bool
	 */
	public function passes();

	/**
	 * Get validation values
	 * 
	 * @return array
	 */
	public function getValues();

	/**
	 * Get validation values
	 * 
	 * @return array
	 */
	public function getRules();

	/**
	 * Get validation errors
	 * 
	 * @return array
	 */
	public function getErrors();

	/**
	 * Set validation values
	 * 
	 * @return array
	 */
	public function setValues(array $values = array());

	/**
	 * Set validation rules
	 * 
	 * @return array
	 */
	public function setRules(array $rules = array());
    
}