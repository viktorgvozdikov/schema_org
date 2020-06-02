<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PriceSpecification;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCompoundPriceSpecification{
	 /**
	 * This property links to all <a class="localLink" href="/UnitPriceSpecification">UnitPriceSpecification</a> nodes that apply in parallel for the <a class="localLink" href="/CompoundPriceSpecification">CompoundPriceSpecification</a> node.
	 * @var String $priceComponent
	 */
	protected $priceComponent;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceComponent($x){
		$this->priceComponent = new Text('PriceComponent',$x);
		return $this;
	}


}