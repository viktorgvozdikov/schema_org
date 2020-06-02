<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMenuSection{
	 /**
	 * A food or drink item contained in a menu or menu section.
	 * @var String $hasMenuItem
	 */
	protected $hasMenuItem;

	 /**
	 * A subgrouping of the menu (by dishes, course, serving time period, etc.).
	 * @var String $hasMenuSection
	 */
	protected $hasMenuSection;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasMenuItem($x){
		$this->hasMenuItem = new Text('hasMenuItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasMenuSection($x){
		$this->hasMenuSection = new Text('hasMenuSection',$x);
		return $this;
	}


}