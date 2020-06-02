<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\AchieveAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLoseAction{
	 /**
	 * A sub property of participant. The winner of the action.
	 * @var String $winner
	 */
	protected $winner;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setWinner($x){
		$this->winner = new Text('Winner',$x);
		return $this;
	}


}