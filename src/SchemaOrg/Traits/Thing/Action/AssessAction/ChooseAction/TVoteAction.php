<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction\ChooseAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVoteAction{
	 /**
	 * A sub property of object. The candidate subject of this action.
	 * @var String $candidate
	 */
	protected $candidate;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCandidate($x){
		$this->candidate = new Text('Candidate',$x);
		return $this;
	}


}