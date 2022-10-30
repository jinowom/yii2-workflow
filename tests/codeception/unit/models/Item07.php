<?php

namespace tests\codeception\unit\models;

use Yii;
use jinowom\workflow\base\SimpleWorkflowBehavior;
use jinowom\workflow\source\file\IWorkflowDefinitionProvider;

/**
 * @property integer $id
 * @property string $name
 * @property string $status
 */
class Item07 extends \yii\db\ActiveRecord
{
	public $statusAlias = null;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    public function behaviors()
    {
        return [
        	'workflow' => [
        		'class' => SimpleWorkflowBehavior::className(),
        		'statusAttribute' => 'statusAlias',
        		'statusAccessor' => 'status_accessor'
    	    ]
        ];
    }
}
