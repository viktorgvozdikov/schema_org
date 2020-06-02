<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReview{
	 /**
	 * The item that is being reviewed/rated.
	 * @var String $itemReviewed
	 */
	protected $itemReviewed;

	 /**
	 * This Review or Rating is relevant to this part or facet of the itemReviewed.
	 * @var String $reviewAspect
	 */
	protected $reviewAspect;

	 /**
	 * The actual body of the review.
	 * @var String $reviewBody
	 */
	protected $reviewBody;

	 /**
	 * The rating given in this review. Note that reviews can themselves be rated. The <code>reviewRating</code> applies to rating given by the review. The <a class="localLink" href="/aggregateRating">aggregateRating</a> property applies to the review itself, as a creative work.
	 * @var String $reviewRating
	 */
	protected $reviewRating;


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
	public function setReviewAspect($x){
		$this->reviewAspect = new Text('reviewAspect',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReviewBody($x){
		$this->reviewBody = new Text('reviewBody',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReviewRating($x){
		$this->reviewRating = new Text('reviewRating',$x);
		return $this;
	}


}