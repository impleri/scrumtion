<?php
require_once 'user.php';

/**
 * class orgAdmin
 * Organisation Admin
 *
 * Admin are allowed to assign a project to an organisation as well as add users to
 * an organisation and its projects.
 */
class sjOrgAdmin extends sjUser {
	/**
	 *
	 * @access public
	 */
	public $organisation;

	/**
	 * Make Admin
	 *
	 * Give a user admin rights (e.g. add users and projects, change details) to the
	 * organisation.
	 *
	 * @param user user
	 * @return projectManager
	 * @access public
	 */
	public function makeAdmin ($user) {

	}
}
