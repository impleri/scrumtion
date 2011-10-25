<?php
require_once 'user.php';

/**
 * class projectManager
 * The ProjectManager(s) are able to create, start, review, and end sprints; assign
 * tasks to TeamMembers; tag stories and tasks; create tasks from stories.
 */
class sjProjectManager extends sjUser {
	/**
	 *
	 * @access public
	 */
	public $project;

	/**
	 *
	 *
	 * @return
	 * @access public
	 */
	public function poker() {

	}

	/**
	 *
	 *
	 * @param sprint sprint
	 * @return
	 * @access public
	 */
	public function beginSprint ($sprint) {

	}

	/**
	 * Mark a task as successfully completed, reviewed, and tested.
	 *
	 * @param task task
	 * @return
	 * @access public
	 */
	public function reviewTask ($task) {

	}

	/**
	 *
	 *
	 * @param task task
	 * @return
	 * @access public
	 */
	public function completeTask ($task) {

	}

	/**
	 *
	 *
	 * @param sprint sprint
	 * @return sprint
	 * @access public
	 */
	public function reviewSprint ($sprint) {

	}

	/**
	 *
	 *
	 * @param sprint sprint
	 * @return
	 * @access public
	 */
	public function endSprint ($sprint) {

	}
}
