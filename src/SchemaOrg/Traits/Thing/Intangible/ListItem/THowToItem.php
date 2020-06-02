<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\ListItem;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THowToItem{
	 /**
	 * The required quantity of the item(s).
	 * @var String $requiredQuantity
	 */
	protected $requiredQuantity;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiredQuantity($x){
		$this->requiredQuantity = new Text('RequiredQuantity',$x);
		return $this;
	}


}