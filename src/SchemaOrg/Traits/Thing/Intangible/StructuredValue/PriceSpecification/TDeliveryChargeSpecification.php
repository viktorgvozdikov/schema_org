<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue\PriceSpecification;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDeliveryChargeSpecification{
	 /**
	 * The delivery method(s) to which the delivery charge or payment charge specification applies.
	 * @var String $appliesToDeliveryMethod
	 */
	protected $appliesToDeliveryMethod;

	 /**
	 * The geographic area where a service or offered item is provided. Supersedes <a href="/serviceArea">serviceArea</a>.
	 * @var String $areaServed
	 */
	protected $areaServed;

	 /**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br><br>
	 * 
	 * See also <a class="localLink" href="/ineligibleRegion">ineligibleRegion</a>.
	 * @var String $eligibleRegion
	 */
	protected $eligibleRegion;

	 /**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br><br>
	 * 
	 * See also <a class="localLink" href="/eligibleRegion">eligibleRegion</a>.
	 * @var String $ineligibleRegion
	 */
	protected $ineligibleRegion;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAppliesToDeliveryMethod($x){
		$this->appliesToDeliveryMethod = new Text('AppliesToDeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAreaServed($x){
		$this->areaServed = new Text('AreaServed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleRegion($x){
		$this->eligibleRegion = new Text('EligibleRegion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIneligibleRegion($x){
		$this->ineligibleRegion = new Text('IneligibleRegion',$x);
		return $this;
	}


}