<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Review;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMediaReview{
	 /**
	 * Indicates a MediaManipulationRatingEnumeration classification of a media object (in the context of how it was published or shared).
	 * @var String $mediaAuthenticityCategory
	 */
	protected $mediaAuthenticityCategory;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMediaAuthenticityCategory($x){
		$this->mediaAuthenticityCategory = new Text('mediaAuthenticityCategory',$x);
		return $this;
	}


}