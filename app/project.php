<?php
require_once 'object.php';

/**
 * class project
 * Project Class
 *
 * The Project class is the central class through which most other classes pass in
 * one way or another.
 */
class sjProject extends sjObject {
	/**
	 * Point scale to determine complexity of task.
	 * @access public
	 */
	public $pointScale;

	/**
	 * Method used to calculate project velocity
	 * @access public
	 */
	public $velocityMethod;

	/**
	 *
	 * @access public
	 */
	public $visibility = 0;

	/**
	 * Maximum points allowed for a sprint
	 * @access public
	 */
	public $maxPoints = 10;

	/**
	 * @see organisation
	 * @access public
	 */
	public $organisation = 0;

	/**
	 * @see productOwner
	 * @access public
	 */
	public $productOwner = 0;

	/**
	 * @see projectManager
	 * @access public
	 */
	public $admin = 0;

	/**
	 * @see members
	 * @access public
	 */
	public $members;

	/**
	 * @see story
	 * @access public
	 */
	public $stories;

	/**
	 * @see sprint
	 * @access public
	 */
	public $sprints;

	/**
	 * @see task
	 * @access public
	 */
	public $tasks;

	/**
	 * Add Member
	 *
	 * Add an existing user to the project. Use $position to determine which access
	 * rights the user has.
	 *
	 * @param user user
	 * @param int position
	 * @return user
	 * @access public
	 */
	public function addMember ($user, $position=0) {

	}

	/**
	 * Make Owner
	 *
	 * Convert a project member to be productOwner.
	 *
	 * @param user user
	 * @return productOwner
	 * @access public
	 */
	public function makeOwner ($user) {

	}

	/**
	 * Make Admin
	 *
	 * Convert a project member to be projectManager.
	 *
	 * @param user user
	 * @return projectManager
	 * @access public
	 */
	public function makeAdmin ($user) {

	}

	/**
	 * Create Story
	 *
	 * Add a new story to the project.
	 *
	 * @param string name
	 * @param string description
	 * @param user user
	 * @return story
	 * @access public
	 */
	public function createStory ($name, $description, $user=0) {

	}

	/**
	 * Create Task
	 *
	 * Add a new task to the project backlog.
	 *
	 * @param string name
	 * @param string description
	 * @param int points
	 * @param story story
	 * @param member member
	 * @return task
	 * @access public
	 */
	public function createTask ($name, $description, $points=1, $story=0, $member=0) {

	}

	/**
	 * Create Sprint
	 *
	 * Add a new sprint to the project.
	 *
	 * @param string name
	 * @param string description
	 * @param int due
	 * @param int start
	 * @return sprint
	 * @access public
	 */
	public function createSprint ($name, $description, $due=0, $start=0) {

	}

	/**
	 * Move Task
	 *
	 * Reassign a task to a different sprint (or the backlog).
	 *
	 * @param story task
	 * @param int queue
	 * @return
	 * @access public
	 */
	public function moveTask ($task, $queue) {

	}

	/**
	 *
	 *
	 * @return
	 * @access public
	 */
	public function burndown( ) {

	}
}
