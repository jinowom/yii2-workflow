<?php
namespace tests\codeception\unit\models;

use jinowom\workflow\base\StatusInterface;


class MyStatus implements StatusInterface
{
	/* (non-PHPdoc)
	 * @see \jinowom\workflow\base\StatusInterface::getId()
	 */
	public function getId() {
		// TODO: Auto-generated method stub

	}

	/* (non-PHPdoc)
	 * @see \jinowom\workflow\base\StatusInterface::getLabel()
	 */
	public function getLabel() {
		// TODO: Auto-generated method stub

	}

	/* (non-PHPdoc)
	 * @see \jinowom\workflow\base\StatusInterface::getWorkflowId()
	 */
	public function getWorkflowId() {
		// TODO: Auto-generated method stub

	}

	/* (non-PHPdoc)
	 * @see \jinowom\workflow\base\StatusInterface::getTransitions()
	 */
	public function getTransitions() {
		// TODO: Auto-generated method stub

	}
	
	/* (non-PHPdoc)
	 * @see \jinowom\workflow\base\StatusInterface::getWorkflow()
	 */
	public function getWorkflow() {
		// TODO: Auto-generated method stub

	}
	
	public function isInitialStatus() {
		
	}


}