<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWarrantyPromise{
	 /**
	 * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
	 * @var String $durationOfWarranty
	 */
	protected $durationOfWarranty;

	 /**
	 * The scope of the warranty promise.
	 * @var String $warrantyScope
	 */
	protected $warrantyScope;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDurationOfWarranty($x){
		$this->durationOfWarranty = new Text('durationOfWarranty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWarrantyScope($x){
		$this->warrantyScope = new Text('warrantyScope',$x);
		return $this;
	}


}