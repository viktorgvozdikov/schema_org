<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\ListItem\HowToItem;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THowToSupply{
	 /**
	 * The estimated cost of the supply or supplies consumed when performing instructions.
	 * @var String $estimatedCost
	 */
	protected $estimatedCost;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEstimatedCost($x){
		$this->estimatedCost = new Text('estimatedCost',$x);
		return $this;
	}


}