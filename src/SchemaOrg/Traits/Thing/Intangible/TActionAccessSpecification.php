<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TActionAccessSpecification{
	 /**
	 * The end of the availability of the product or service included in the offer.
	 * @var String $availabilityEnds
	 */
	protected $availabilityEnds;

	 /**
	 * The beginning of the availability of the product or service included in the offer.
	 * @var String $availabilityStarts
	 */
	protected $availabilityStarts;

	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;

	 /**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br><br>
	 * 
	 * See also <a class="localLink" href="/ineligibleRegion">ineligibleRegion</a>.
	 * @var String $eligibleRegion
	 */
	protected $eligibleRegion;

	 /**
	 * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	 * @var String $expectsAcceptanceOf
	 */
	protected $expectsAcceptanceOf;

	 /**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br><br>
	 * 
	 * See also <a class="localLink" href="/eligibleRegion">eligibleRegion</a>.
	 * @var String $ineligibleRegion
	 */
	protected $ineligibleRegion;

	 /**
	 * Indicates if use of the media require a subscription  (either paid or free). Allowed values are <code>true</code> or <code>false</code> (note that an earlier version had 'yes', 'no').
	 * @var String $requiresSubscription
	 */
	protected $requiresSubscription;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailabilityEnds($x){
		$this->availabilityEnds = new Text('availabilityEnds',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailabilityStarts($x){
		$this->availabilityStarts = new Text('availabilityStarts',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCategory($x){
		$this->category = new Text('category',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleRegion($x){
		$this->eligibleRegion = new Text('eligibleRegion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectsAcceptanceOf($x){
		$this->expectsAcceptanceOf = new Text('expectsAcceptanceOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIneligibleRegion($x){
		$this->ineligibleRegion = new Text('ineligibleRegion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRequiresSubscription($x){
		$this->requiresSubscription = new Text('requiresSubscription',$x);
		return $this;
	}


}