<?php
namespace Phalcon\Mvc\Model
{

	/**
	 * Phalcon\Mvc\Model\Validator
	 *
	 * This is a base class for Phalcon\Mvc\Model validators
	 */
	abstract class Validator implements \Phalcon\Mvc\Model\ValidatorInterface
	{

		protected $_options;

		protected $_messages;

		/**
		 * \Phalcon\Mvc\Model\Validator constructor
		 *
		 * @param array $options
		 */
		public function __construct($options)
		{}

		/**
		 * Appends a message to the validator
		 *
		 * @param string $message
		 * @param string $field
		 * @param string $type
		 */
		protected function appendMessage()
		{}

		/**
		 * Returns messages generated by the validator
		 *
		 * @return array
		 */
		public function getMessages()
		{}

		/**
		 * Returns all the options from the validator
		 *
		 * @return array
		 */
		public function getOptions()
		{}

		/**
		 * Returns an option
		 *
		 * @param string $option
		 * @return mixed
		 */
		public function getOption()
		{}

		/**
		 * Check whether a option has been defined in the validator options
		 *
		 * @param string $option
		 * @return boolean
		 */
		public function isSetOption()
		{}
	}
}
