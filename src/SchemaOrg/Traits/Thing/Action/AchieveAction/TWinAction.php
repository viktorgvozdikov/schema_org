<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\AchieveAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWinAction{
	 /**
	 * A sub property of participant. The loser of the action.
	 * @var String $loser
	 */
	protected $loser;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setLoser($x){
		$this->loser = new Text('loser',$x);
		return $this;
	}


}