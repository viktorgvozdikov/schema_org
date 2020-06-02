<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAccommodation{
	 /**
	 * Category of an <a class="localLink" href="/Accommodation">Accommodation</a>, following real estate conventions e.g. RESO (see <a href="https://ddwiki.reso.org/display/DDW17/PropertySubType+Field">PropertySubType</a>, and <a href="https://ddwiki.reso.org/display/DDW17/PropertyType+Field">PropertyType</a> fields  for suggested values).
	 * @var String $accommodationCategory
	 */
	protected $accommodationCategory;

	 /**
	 * A floorplan of some <a class="localLink" href="/Accommodation">Accommodation</a>.
	 * @var String $accommodationFloorPlan
	 */
	protected $accommodationFloorPlan;

	 /**
	 * The floor level for an <a class="localLink" href="/Accommodation">Accommodation</a> in a multi-storey building. Since counting
	 *   systems <a href="https://en.wikipedia.org/wiki/Storey#Consecutive_number_floor_designations">vary internationally</a>, the local system should be used where possible.
	 * @var String $floorLevel
	 */
	protected $floorLevel;

	 /**
	 * The size of the accommodation, e.g. in square meter or squarefoot.
	 * Typical unit code(s): MTK for square meter, FTK for square foot, or YDK for square yard
	 * @var String $floorSize
	 */
	protected $floorSize;

	 /**
	 * Length of the lease for some <a class="localLink" href="/Accommodation">Accommodation</a>, either particular to some <a class="localLink" href="/Offer">Offer</a> or in some cases intrinsic to the property.
	 * @var String $leaseLength
	 */
	protected $leaseLength;

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
	 * Indications regarding the permitted usage of the accommodation.
	 * @var String $permittedUsage
	 */
	protected $permittedUsage;

	 /**
	 * Indicates whether pets are allowed to enter the accommodation or lodging business. More detailed information can be put in a text value.
	 * @var String $petsAllowed
	 */
	protected $petsAllowed;

	 /**
	 * The year an <a class="localLink" href="/Accommodation">Accommodation</a> was constructed. This corresponds to the <a href="https://ddwiki.reso.org/display/DDW17/YearBuilt+Field">YearBuilt field in RESO</a>.
	 * @var String $yearBuilt
	 */
	protected $yearBuilt;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccommodationCategory($x){
		$this->accommodationCategory = new Text('AccommodationCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccommodationFloorPlan($x){
		$this->accommodationFloorPlan = new Text('AccommodationFloorPlan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFloorLevel($x){
		$this->floorLevel = new Text('FloorLevel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFloorSize($x){
		$this->floorSize = new Text('FloorSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLeaseLength($x){
		$this->leaseLength = new Text('LeaseLength',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfBathroomsTotal($x){
		$this->numberOfBathroomsTotal = new Text('NumberOfBathroomsTotal',$x);
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
	public function setNumberOfFullBathrooms($x){
		$this->numberOfFullBathrooms = new Text('NumberOfFullBathrooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfPartialBathrooms($x){
		$this->numberOfPartialBathrooms = new Text('NumberOfPartialBathrooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfRooms($x){
		$this->numberOfRooms = new Text('NumberOfRooms',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPermittedUsage($x){
		$this->permittedUsage = new Text('PermittedUsage',$x);
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

	/**
	 * @param $x
	 * @return $this
	 */
	public function setYearBuilt($x){
		$this->yearBuilt = new Text('YearBuilt',$x);
		return $this;
	}


}