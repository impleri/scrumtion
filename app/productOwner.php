<?php
require_once 'user.php';

/**
 * class productOwner
 * Product Owner class
 * The ProductOwner is a user assigned to the project who is able to prioritise
 * stories and tasks. Ideally, this user does not work on the project development.
 */
class sjProductOwner extends sjUser {
	/**
	 *
	 * @access public
	 */
	public $project;

	/**
	 *
	 *
	 * @param task task
	 * @param int priority
	 * @return task
	 * @access public
	 */
	public function prioritiseTask ($task, $priority) {

	}

	/**
	 *
	 *
	 * @param story story
	 * @param int priority
	 * @return story
	 * @access public
	 */
	public function prioritiseStory ($story, $priority) {

	}
}
