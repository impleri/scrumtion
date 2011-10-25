<?php
require_once 'object.php';

/**
 * class organisation
 * Organisation Class
 *
 * Organisations are used to separate development groups without binding users to a
 * single one.
 */
class sjOrganisation extends sjObject {
	/**
	 *
	 * @access public
	 */
	public $users;

	/**
	 *
	 * @access public
	 */
	public $projects;

	/**
	 *
	 * @access public
	 */
	public $admin = 0;

	/**
	 * Add User
	 *
	 * Add a user to the organisation. Users within an organisation can view all
	 * projects within an organisation, but they must be added as a project member in
	 * order to contribute.
	 *
	 * @param user user
	 * @return user
	 * @access public
	 */
	public function addUser ($user) {

	}
}
