<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction\CommunicateAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAskAction{
	 /**
	 * A sub property of object. A question.
	 * @var String $question
	 */
	protected $question;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setQuestion($x){
		$this->question = new Text('Question',$x);
		return $this;
	}


}