<?php
require_once 'object.php';

/**
 * class sprint
 * A sprint is a short development cycle which works on tasks created by the
 * ScrumTeam and prioritised by the ProductOwner. Generally, a sprint lasts one to
 * two weeks and results in the fully functioning features identified in the
 * initial planning meeting.
 */
class sjSprint extends sjObject {
	/**
	 *
	 * @access public
	 */
	public $tasks;

	/**
	 *
	 *
	 * @return
	 * @access public
	 */
	public function burndown() {

	}
}
