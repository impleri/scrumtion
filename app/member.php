<?php
require_once 'user.php';

/**
 * class member
 * (Project) Member Class
 *
 * The project Members are developers who can create tasks from stories,
 * estimate/score tasks, and begin and end tasks in the current sprint and the
 * project backlogs.
 */
class sjMember extends sjUser {
	/**
	 *
	 * @access public
	 */
	public $project;


	/**
	 * assign a task to user
	 *
	 * @param task task
	 * @return
	 * @access public
	 */
	public function addTask ($task) {

	}

	/**
	 * mark task in progress
	 *
	 * @param task task
	 * @return
	 * @access public
	 */
	public function startTask ($task) {

	}

	/**
	 *
	 *
	 * @param task task
	 * @return
	 * @access public
	 */
	public function holdTask ($task) {

	}

	/**
	 * Send task to review stage
	 *
	 * @param task task
	 * @return
	 * @access public
	 */
	public function endTask ($task) {

	}
}
