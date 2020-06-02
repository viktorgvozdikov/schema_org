<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPlace{
	 /**
	 * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br><br>
	 * 
	 * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	 * @var String $additionalProperty
	 */
	protected $additionalProperty;

	 /**
	 * Physical address of the item.
	 * @var String $address
	 */
	protected $address;

	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.
	 * @var String $amenityFeature
	 */
	protected $amenityFeature;

	 /**
	 * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.<br><br>
	 * 
	 * For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.
	 * @var String $branchCode
	 */
	protected $branchCode;

	 /**
	 * The basic containment relation between a place and one that contains it. Supersedes <a href="/containedIn">containedIn</a>.<br> Inverse property: <a href="/containsPlace">containsPlace</a>.
	 * @var String $containedInPlace
	 */
	protected $containedInPlace;

	 /**
	 * The basic containment relation between a place and another that it contains.<br> Inverse property: <a href="/containedInPlace">containedInPlace</a>.
	 * @var String $containsPlace
	 */
	protected $containsPlace;

	 /**
	 * Upcoming or past event associated with this place, organization, or action. Supersedes <a href="/events">events</a>.
	 * @var String $event
	 */
	protected $event;

	 /**
	 * The fax number.
	 * @var String $faxNumber
	 */
	protected $faxNumber;

	 /**
	 * The geo coordinates of the place.
	 * @var String $geo
	 */
	protected $geo;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a containing geometry to a contained geometry. "a contains b iff no points of b lie in the exterior of a, and at least one point of the interior of b lies in the interior of a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoContains
	 */
	protected $geoContains;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that covers it. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoCoveredBy
	 */
	protected $geoCoveredBy;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a covering geometry to a covered geometry. "Every point of b is a point of (the interior or boundary of) a". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoCovers
	 */
	protected $geoCovers;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that crosses it: "a crosses b: they have some but not all interior points in common, and the dimension of the intersection is less than that of at least one of them". As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoCrosses
	 */
	protected $geoCrosses;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) are topologically disjoint: they have no point in common. They form a set of disconnected geometries." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>)
	 * @var String $geoDisjoint
	 */
	protected $geoDisjoint;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) are topologically equal, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>. "Two geometries are topologically equal if their interiors intersect and no part of the interior or boundary of one geometry intersects the exterior of the other" (a symmetric relationship)
	 * @var String $geoEquals
	 */
	protected $geoEquals;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) have at least one point in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoIntersects
	 */
	protected $geoIntersects;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to another that geospatially overlaps it, i.e. they have some but not all points in common. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoOverlaps
	 */
	protected $geoOverlaps;

	 /**
	 * Represents spatial relations in which two geometries (or the places they represent) touch: they have at least one boundary point in common, but no interior points." (a symmetric relationship, as defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a> )
	 * @var String $geoTouches
	 */
	protected $geoTouches;

	 /**
	 * Represents a relationship between two geometries (or the places they represent), relating a geometry to one that contains it, i.e. it is inside (i.e. within) its interior. As defined in <a href="https://en.wikipedia.org/wiki/DE-9IM">DE-9IM</a>.
	 * @var String $geoWithin
	 */
	protected $geoWithin;

	 /**
	 * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	 * @var String $globalLocationNumber
	 */
	protected $globalLocationNumber;

	 /**
	 * Indicates whether some facility (e.g. <a class="localLink" href="/FoodEstablishment">FoodEstablishment</a>, <a class="localLink" href="/CovidTestingFacility">CovidTestingFacility</a>) offers a service that can be used by driving through in a car. In the case of <a class="localLink" href="/CovidTestingFacility">CovidTestingFacility</a> such facilities could potentially help with social distancing from other potentially-infected users.
	 * @var String $hasDriveThroughService
	 */
	protected $hasDriveThroughService;

	 /**
	 * A URL to a map of the place. Supersedes <a href="/map">map</a>, <a href="/maps">maps</a>.
	 * @var String $hasMap
	 */
	protected $hasMap;

	 /**
	 * A flag to signal that the item, event, or place is accessible for free. Supersedes <a href="/free">free</a>.
	 * @var String $isAccessibleForFree
	 */
	protected $isAccessibleForFree;

	 /**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	 * @var String $isicV4
	 */
	protected $isicV4;

	 /**
	 * The latitude of a location. For example <code>37.42242</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
	 * @var String $latitude
	 */
	protected $latitude;

	 /**
	 * An associated logo.
	 * @var String $logo
	 */
	protected $logo;

	 /**
	 * The longitude of a location. For example <code>-122.08585</code> (<a href="https://en.wikipedia.org/wiki/World_Geodetic_System">WGS 84</a>).
	 * @var String $longitude
	 */
	protected $longitude;

	 /**
	 * The total number of individuals that may attend an event or venue.
	 * @var String $maximumAttendeeCapacity
	 */
	protected $maximumAttendeeCapacity;

	 /**
	 * The opening hours of a certain place.
	 * @var String $openingHoursSpecification
	 */
	protected $openingHoursSpecification;

	 /**
	 * A photograph of this place. Supersedes <a href="/photos">photos</a>.
	 * @var String $photo
	 */
	protected $photo;

	 /**
	 * A flag to signal that the <a class="localLink" href="/Place">Place</a> is open to public visitors.  If this property is omitted there is no assumed default boolean value
	 * @var String $publicAccess
	 */
	protected $publicAccess;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * A slogan or motto associated with the item.
	 * @var String $slogan
	 */
	protected $slogan;

	 /**
	 * Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.
	 * @var String $smokingAllowed
	 */
	protected $smokingAllowed;

	 /**
	 * The special opening hours of a certain place.<br><br>
	 * 
	 * Use this to explicitly override general opening hours brought in scope by <a class="localLink" href="/openingHoursSpecification">openingHoursSpecification</a> or <a class="localLink" href="/openingHours">openingHours</a>.
	 * @var String $specialOpeningHoursSpecification
	 */
	protected $specialOpeningHoursSpecification;

	 /**
	 * The telephone number.
	 * @var String $telephone
	 */
	protected $telephone;

	 /**
	 * A page providing information on how to book a tour of some <a class="localLink" href="/Place">Place</a>, such as an <a class="localLink" href="/Accommodation">Accommodation</a> or <a class="localLink" href="/ApartmentComplex">ApartmentComplex</a> in a real estate setting, as well as other kinds of tours as appropriate.
	 * @var String $tourBookingPage
	 */
	protected $tourBookingPage;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalProperty($x){
		$this->additionalProperty = new Text('additionalProperty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddress($x){
		$this->address = new Text('address',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAggregateRating($x){
		$this->aggregateRating = new Text('aggregateRating',$x);
		return $this;
	}

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
	public function setBranchCode($x){
		$this->branchCode = new Text('branchCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContainedInPlace($x){
		$this->containedInPlace = new Text('containedInPlace',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContainsPlace($x){
		$this->containsPlace = new Text('containsPlace',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEvent($x){
		$this->event = new Text('event',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFaxNumber($x){
		$this->faxNumber = new Text('faxNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeo($x){
		$this->geo = new Text('geo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoContains($x){
		$this->geoContains = new Text('geoContains',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoCoveredBy($x){
		$this->geoCoveredBy = new Text('geoCoveredBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoCovers($x){
		$this->geoCovers = new Text('geoCovers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoCrosses($x){
		$this->geoCrosses = new Text('geoCrosses',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoDisjoint($x){
		$this->geoDisjoint = new Text('geoDisjoint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoEquals($x){
		$this->geoEquals = new Text('geoEquals',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoIntersects($x){
		$this->geoIntersects = new Text('geoIntersects',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoOverlaps($x){
		$this->geoOverlaps = new Text('geoOverlaps',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoTouches($x){
		$this->geoTouches = new Text('geoTouches',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGeoWithin($x){
		$this->geoWithin = new Text('geoWithin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGlobalLocationNumber($x){
		$this->globalLocationNumber = new Text('globalLocationNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasDriveThroughService($x){
		$this->hasDriveThroughService = new Text('hasDriveThroughService',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasMap($x){
		$this->hasMap = new Text('hasMap',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsAccessibleForFree($x){
		$this->isAccessibleForFree = new Text('isAccessibleForFree',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsicV4($x){
		$this->isicV4 = new Text('isicV4',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLatitude($x){
		$this->latitude = new Text('latitude',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLogo($x){
		$this->logo = new Text('logo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLongitude($x){
		$this->longitude = new Text('longitude',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaximumAttendeeCapacity($x){
		$this->maximumAttendeeCapacity = new Text('maximumAttendeeCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOpeningHoursSpecification($x){
		$this->openingHoursSpecification = new Text('openingHoursSpecification',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPhoto($x){
		$this->photo = new Text('photo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublicAccess($x){
		$this->publicAccess = new Text('publicAccess',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReview($x){
		$this->review = new Text('review',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSlogan($x){
		$this->slogan = new Text('slogan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSmokingAllowed($x){
		$this->smokingAllowed = new Text('smokingAllowed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpecialOpeningHoursSpecification($x){
		$this->specialOpeningHoursSpecification = new Text('specialOpeningHoursSpecification',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTelephone($x){
		$this->telephone = new Text('telephone',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTourBookingPage($x){
		$this->tourBookingPage = new Text('tourBookingPage',$x);
		return $this;
	}


}