<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\InteractAction\CommunicateAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCommentAction{
	 /**
	 * A sub property of result. The Comment created or sent as a result of this action.
	 * @var String $resultComment
	 */
	protected $resultComment;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setResultComment($x){
		$this->resultComment = new Text('resultComment',$x);
		return $this;
	}


}