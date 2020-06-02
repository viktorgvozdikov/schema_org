<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGuide{
	 /**
	 * This Review or Rating is relevant to this part or facet of the itemReviewed.
	 * @var String $reviewAspect
	 */
	protected $reviewAspect;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setReviewAspect($x){
		$this->reviewAspect = new Text('reviewAspect',$x);
		return $this;
	}


}