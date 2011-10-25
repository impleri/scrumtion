<?php
require_once 'object.php';

/**
 * class story
 * Stories are provided by the ProductOwner to indicate desired development results
 * and goals.
 */
class sjStory extends sjObject {
	/**
	 *
	 * @access public
	 */
	public $tags;

	/**
	 *
	 * @access public
	 */
	public $tasks;

	/**
	 *
	 * @access private
	 */
	private $priority;
}
