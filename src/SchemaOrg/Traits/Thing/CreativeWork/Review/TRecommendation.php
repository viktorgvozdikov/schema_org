<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Review;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRecommendation{
	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCategory($x){
		$this->category = new Text('Category',$x);
		return $this;
	}


}