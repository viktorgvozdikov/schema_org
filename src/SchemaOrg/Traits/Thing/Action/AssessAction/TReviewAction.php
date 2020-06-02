<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReviewAction{
	 /**
	 * A sub property of result. The review that resulted in the performing of the action.
	 * @var String $resultReview
	 */
	protected $resultReview;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setResultReview($x){
		$this->resultReview = new Text('ResultReview',$x);
		return $this;
	}


}