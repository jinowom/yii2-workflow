<?php

namespace tests\unit\workflow\source\file;

use Yii;
use yii\codeception\TestCase;
use tests\codeception\unit\models\Item01;
use yii\base\InvalidConfigException;
use yii\base\Exception;
use jinowom\workflow\source\file\WorkflowFileSource;
use jinowom\workflow\base\Status;
use jinowom\workflow\base\Transition;
use jinowom\workflow\base\Workflow;


class LoadWorkflowTest extends TestCase
{
	use \Codeception\Specify;

	public $src;

	protected function setUp()
	{
		parent::setUp();
		$this->src = new WorkflowFileSource();
	}


    public function testLoadWorkflowSuccess1()
    {
    	$src = new WorkflowFileSource();
    	$src->addWorkflowDefinition('wid', [
			'initialStatusId' => 'A',
			'status' => [
				'A' => [
					'label' => 'Entry',
					'transition' => ['B','A']
				],
				'B' => [
					'label' => 'Published',
					'transition' => ['A','C']
				],
				'C' => [
					'label' => 'node C',
					'transition' => ['A','D']
				],'D'
			]
		]);
    	
    	verify($src->getStatus('wid/A'))->notNull();
    	verify($src->getStatus('wid/B'))->notNull();
    	verify($src->getStatus('wid/C'))->notNull();
    	verify($src->getStatus('wid/D'))->notNull();
    	
    	verify(count($src->getTransitions('wid/A')))->equals(2);
    }
    
    public function testLoadWorkflowSuccess2()
    {
    	$src = new WorkflowFileSource();
    	$src->addWorkflowDefinition('wid', [
    		'initialStatusId' => 'A',
    		'status' => [
    			'A' => [
    				'label' => 'Entry',
    				'transition' => 'A,B'
    			],
    			'B' => [
    				'label' => 'Published',
    				'transition' => '  A  , B  '
    			],
    		]
    	]);
    	 
    	verify($src->getStatus('wid/A'))->notNull();
    	verify($src->getStatus('wid/B'))->notNull();
    	 
    	verify(count($src->getTransitions('wid/A')))->equals(2);
    }    
}
