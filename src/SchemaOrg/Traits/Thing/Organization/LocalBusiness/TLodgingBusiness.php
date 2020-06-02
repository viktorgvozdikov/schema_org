<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLodgingBusiness{
	 /**
	 * An intended audience, i.e. a group for whom something was created. Supersedes <a href="/serviceAudience">serviceAudience</a>.
	 * @var String $audience
	 */
	protected $audience;

	 /**
	 * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/inLanguage">inLanguage</a>
	 * 
	 * @var String $availableLanguage
	 */
	protected $availableLanguage;

	 /**
	 * The earliest someone may check into a lodging establishment.
	 * @var String $checkinTime
	 */
	protected $checkinTime;

	 /**
	 * The latest someone may check out of a lodging establishment.
	 * @var String $checkoutTime
	 */
	protected $checkoutTime;

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
	 * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
	 * @var String $starRating
	 */
	protected $starRating;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAudience($x){
		$this->audience = new Text('Audience',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableLanguage($x){
		$this->availableLanguage = new Text('AvailableLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCheckinTime($x){
		$this->checkinTime = new Text('CheckinTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCheckoutTime($x){
		$this->checkoutTime = new Text('CheckoutTime',$x);
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
	public function setPetsAllowed($x){
		$this->petsAllowed = new Text('PetsAllowed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStarRating($x){
		$this->starRating = new Text('StarRating',$x);
		return $this;
	}


}