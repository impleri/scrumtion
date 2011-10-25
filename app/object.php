<?php

/**
 * class sjObject
 *
 */
abstract class sjObject {
	/**
	 *
	 * @access public
	 */
	public $id;

	/**
	 *
	 * @access public
	 */
	public $name;

	/**
	 *
	 * @access public
	 */
	public $description;


	/**
	 *
	 *
	 * @return
	 * @abstract
	 * @access public
	 */
	function insert() {}

	/**
	 *
	 *
	 * @return
	 * @abstract
	 * @access public
	 */
	function update() {}

	/**
	 *
	 *
	 * @return
	 * @abstract
	 * @access public
	 */
	function delete() {}
}
