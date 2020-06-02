<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTrip{
	 /**
	 * The expected arrival time.
	 * @var String $arrivalTime
	 */
	protected $arrivalTime;

	 /**
	 * The expected departure time.
	 * @var String $departureTime
	 */
	protected $departureTime;

	 /**
	 * Destination(s) ( <a class="localLink" href="/Place">Place</a> ) that make up a trip. For a trip where destination order is important use <a class="localLink" href="/ItemList">ItemList</a> to specify that order (see examples).
	 * @var String $itinerary
	 */
	protected $itinerary;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;

	 /**
	 * Identifies that this <a class="localLink" href="/Trip">Trip</a> is a subTrip of another Trip.  For example Day 1, Day 2, etc. of a multi-day trip.<br> Inverse property: <a title="Defined in section: pending.schema.org" class="ext ext-pending" href="/subTrip">subTrip</a>.
	 * @var String $partOfTrip
	 */
	protected $partOfTrip;

	 /**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes <a href="/carrier">carrier</a>.
	 * @var String $provider
	 */
	protected $provider;

	 /**
	 * Identifies a <a class="localLink" href="/Trip">Trip</a> that is a subTrip of this Trip.  For example Day 1, Day 2, etc. of a multi-day trip.<br> Inverse property: <a title="Defined in section: pending.schema.org" class="ext ext-pending" href="/partOfTrip">partOfTrip</a>.
	 * @var String $subTrip
	 */
	protected $subTrip;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArrivalTime($x){
		$this->arrivalTime = new Text('arrivalTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartureTime($x){
		$this->departureTime = new Text('departureTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItinerary($x){
		$this->itinerary = new Text('itinerary',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOffers($x){
		$this->offers = new Text('offers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPartOfTrip($x){
		$this->partOfTrip = new Text('partOfTrip',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvider($x){
		$this->provider = new Text('provider',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubTrip($x){
		$this->subTrip = new Text('subTrip',$x);
		return $this;
	}


}