<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBrand{
	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * An associated logo.
	 * @var String $logo
	 */
	protected $logo;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * A slogan or motto associated with the item.
	 * @var String $slogan
	 */
	protected $slogan;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAggregateRating($x){
		$this->aggregateRating = new Text('aggregateRating',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLogo($x){
		$this->logo = new Text('logo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReview($x){
		$this->review = new Text('review',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSlogan($x){
		$this->slogan = new Text('slogan',$x);
		return $this;
	}


}