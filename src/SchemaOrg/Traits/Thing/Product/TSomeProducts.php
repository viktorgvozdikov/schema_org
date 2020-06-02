<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Product;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSomeProducts{
	 /**
	 * The current approximate inventory level for the item or items.
	 * @var String $inventoryLevel
	 */
	protected $inventoryLevel;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInventoryLevel($x){
		$this->inventoryLevel = new Text('InventoryLevel',$x);
		return $this;
	}


}