<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Review;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TClaimReview{
	 /**
	 * A short summary of the specific claims reviewed in a ClaimReview.
	 * @var String $claimReviewed
	 */
	protected $claimReviewed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setClaimReviewed($x){
		$this->claimReviewed = new Text('ClaimReviewed',$x);
		return $this;
	}


}