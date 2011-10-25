<?php
require_once 'object.php';

/**
 * class task
 * Tasks are specific items developed from Stories which represent small,
 * incremental goals which will acheive the goals of a given story.
 */
class sjTask extends sjObject {
	/**
	 *
	 * @access public
	 */
	public $story;

	/**
	 *
	 * @access public
	 */
	public $sprint;

	/**
	 *
	 * @access public
	 */
	public $priority;

	/**
	 *
	 * @access public
	 */
	public $points;

	/**
	 *
	 * @access public
	 */
	public $tags;

	/**
	 *
	 *
	 * @param int status
	 * @return
	 * @access public
	 */
	public function setStatus ($status) {

	}

	/**
	 *
	 *
	 * @param bool toBacklog true = to project backlog, false = to next sprint
	 * @return
	 * @access public
	 */
	public function postpone ($toBacklog=false) {

	}
}
