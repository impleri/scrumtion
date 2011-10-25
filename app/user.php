<?php
require_once 'object.php';

/**
 * class user
 * Generic User Class
 */
class sjUser extends sjObject {
	/**
	 *
	 * @access public
	 */
	public $login;

	/**
	 *
	 * @access public
	 */
	public $email;

	/**
	 *
	 * @access public
	 */
	public $image;

	/**
	 *
	 * @access public
	 */
	public $accessKey;

	/**
	 *
	 * @access private
	 */
	private $password;


	/**
	 * Create Project
	 *
	 * This will make the use the ProjectManager and ProductOwner.
	 *
	 * @param string name
	 * @param string description
	 * @param organisation organisation
	 * @return
	 * @access public
	 */
	public function createProject ($name, $description, $organisation=0) {
		// create a project
	}

	/**
	 *
	 *
	 * @param string action
	 * @param  context Object context to determine capability (e.g. project, organisation).
	 * @return
	 * @access public
	 */
	public function can ($action, $context=0) {
		// auth check
	}
}
