<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Rating;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAggregateRating{
	 /**
	 * The item that is being reviewed/rated.
	 * @var String $itemReviewed
	 */
	protected $itemReviewed;

	 /**
	 * The count of total number of ratings.
	 * @var String $ratingCount
	 */
	protected $ratingCount;

	 /**
	 * The count of total number of reviews.
	 * @var String $reviewCount
	 */
	protected $reviewCount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemReviewed($x){
		$this->itemReviewed = new Text('itemReviewed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRatingCount($x){
		$this->ratingCount = new Text('ratingCount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReviewCount($x){
		$this->reviewCount = new Text('reviewCount',$x);
		return $this;
	}


}