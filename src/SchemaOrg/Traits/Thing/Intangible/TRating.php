<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRating{
	 /**
	 * The author of this content or rating. Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag. That is equivalent to this and may be used interchangeably.
	 * @var String $author
	 */
	protected $author;

	 /**
	 * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
	 * @var String $bestRating
	 */
	protected $bestRating;

	 /**
	 * A short explanation (e.g. one to two sentences) providing background context and other information that led to the conclusion expressed in the rating. This is particularly applicable to ratings associated with "fact check" markup using <a class="localLink" href="/ClaimReview">ClaimReview</a>.
	 * @var String $ratingExplanation
	 */
	protected $ratingExplanation;

	 /**
	 * The rating for the content.<br><br>
	 * 
	 * Usage guidelines:<br><br><ul>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $ratingValue
	 */
	protected $ratingValue;

	 /**
	 * This Review or Rating is relevant to this part or facet of the itemReviewed.
	 * @var String $reviewAspect
	 */
	protected $reviewAspect;

	 /**
	 * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
	 * @var String $worstRating
	 */
	protected $worstRating;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAuthor($x){
		$this->author = new Text('author',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBestRating($x){
		$this->bestRating = new Text('bestRating',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRatingExplanation($x){
		$this->ratingExplanation = new Text('ratingExplanation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRatingValue($x){
		$this->ratingValue = new Text('ratingValue',$x);
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
	public function setWorstRating($x){
		$this->worstRating = new Text('worstRating',$x);
		return $this;
	}


}