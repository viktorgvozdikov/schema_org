<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place\Residence;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TApartmentComplex{
	 /**
	 * Indicates the total (available plus unavailable) number of accommodation units in an <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="/numberOfAvailableAccommodationUnits">numberOfAvailableAccommodationUnits</a>.
	 * @var String $numberOfAccommodationUnits
	 */
	protected $numberOfAccommodationUnits;

	 /**
	 * Indicates the number of available accommodation units in an <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a>, or the number of accommodation units for a specific <a class="localLink" href="/FloorPlan">FloorPlan</a> (within its specific <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a>). See also <a class="localLink" href="/numberOfAccommodationUnits">numberOfAccommodationUnits</a>.
	 * @var String $numberOfAvailableAccommodationUnits
	 */
	protected $numberOfAvailableAccommodationUnits;

	 /**
	 * The total integer number of bedrooms in a some <a class="localLink" href="/Accommodation">Accommodation</a>, <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a> or <a class="localLink" href="/FloorPlan">FloorPlan</a>.
	 * @var String $numberOfBedrooms
	 */
	protected $numberOfBedrooms;

	 /**
	 * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
	 * @var String $petsAllowed
	 */
	protected $petsAllowed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfAccommodationUnits($x){
		$this->numberOfAccommodationUnits = new Text('NumberOfAccommodationUnits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfAvailableAccommodationUnits($x){
		$this->numberOfAvailableAccommodationUnits = new Text('NumberOfAvailableAccommodationUnits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfBedrooms($x){
		$this->numberOfBedrooms = new Text('NumberOfBedrooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPetsAllowed($x){
		$this->petsAllowed = new Text('PetsAllowed',$x);
		return $this;
	}


}