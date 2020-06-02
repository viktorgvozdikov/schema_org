<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFloorPlan{
	 /**
	 * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
	 * @var String $amenityFeature
	 */
	protected $amenityFeature;

	 /**
	 * The size of the accommodation, e.g. in square meter or squarefoot.
	 * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
	 * @var String $floorSize
	 */
	protected $floorSize;

	 /**
	 * Indicates some accommodation that this floor plan describes.
	 * @var String $isPlanForApartment
	 */
	protected $isPlanForApartment;

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
	 * The total integer number of bathrooms in a some <a class="localLink" href="/Accommodation">Accommodation</a>, following real estate conventions as <a href="https://ddwiki.reso.org/display/DDW17/BathroomsTotalInteger+Field">documented in RESO</a>: "The simple sum of the number of bathrooms. For example for a property with two Full Bathrooms and one Half Bathroom, the Bathrooms Total Integer will be 3.". See also <a class="localLink" href="/numberOfRooms">numberOfRooms</a>.
	 * @var String $numberOfBathroomsTotal
	 */
	protected $numberOfBathroomsTotal;

	 /**
	 * The total integer number of bedrooms in a some <a class="localLink" href="/Accommodation">Accommodation</a>, <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a> or <a class="localLink" href="/FloorPlan">FloorPlan</a>.
	 * @var String $numberOfBedrooms
	 */
	protected $numberOfBedrooms;

	 /**
	 * Number of full bathrooms - The total number of full and ¾ bathrooms in an <a class="localLink" href="/Accommodation">Accommodation</a>. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/BathroomsFull+Field">BathroomsFull field in RESO</a>.
	 * @var String $numberOfFullBathrooms
	 */
	protected $numberOfFullBathrooms;

	 /**
	 * Number of partial bathrooms - The total number of half and ¼ bathrooms in an <a class="localLink" href="/Accommodation">Accommodation</a>. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/BathroomsPartial+Field">BathroomsPartial field in RESO</a>.
	 * @var String $numberOfPartialBathrooms
	 */
	protected $numberOfPartialBathrooms;

	 /**
	 * The number of rooms (excluding bathrooms and closets) of the accommodation or lodging business.
	 * Typical unit code(s): ROM for room or C62 for no unit. The type of room can be put in the unitText property of the QuantitativeValue.
	 * @var String $numberOfRooms
	 */
	protected $numberOfRooms;

	 /**
	 * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
	 * @var String $petsAllowed
	 */
	protected $petsAllowed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAmenityFeature($x){
		$this->amenityFeature = new Text('amenityFeature',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFloorSize($x){
		$this->floorSize = new Text('floorSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsPlanForApartment($x){
		$this->isPlanForApartment = new Text('isPlanForApartment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfAccommodationUnits($x){
		$this->numberOfAccommodationUnits = new Text('numberOfAccommodationUnits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfAvailableAccommodationUnits($x){
		$this->numberOfAvailableAccommodationUnits = new Text('numberOfAvailableAccommodationUnits',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfBathroomsTotal($x){
		$this->numberOfBathroomsTotal = new Text('numberOfBathroomsTotal',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfBedrooms($x){
		$this->numberOfBedrooms = new Text('numberOfBedrooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfFullBathrooms($x){
		$this->numberOfFullBathrooms = new Text('numberOfFullBathrooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfPartialBathrooms($x){
		$this->numberOfPartialBathrooms = new Text('numberOfPartialBathrooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfRooms($x){
		$this->numberOfRooms = new Text('numberOfRooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPetsAllowed($x){
		$this->petsAllowed = new Text('petsAllowed',$x);
		return $this;
	}


}