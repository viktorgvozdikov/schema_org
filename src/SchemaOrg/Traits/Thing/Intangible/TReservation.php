<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReservation{
	 /**
	 * The date and time the reservation was booked.
	 * @var String $bookingTime
	 */
	protected $bookingTime;

	 /**
	 * An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred. Supersedes <a href="/bookingAgent">bookingAgent</a>.
	 * @var String $broker
	 */
	protected $broker;

	 /**
	 * The date and time the reservation was modified.
	 * @var String $modifiedTime
	 */
	protected $modifiedTime;

	 /**
	 * The currency of the price, or a price component when attached to <a class="localLink" href="/PriceSpecification">PriceSpecification</a> and its subtypes.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $priceCurrency
	 */
	protected $priceCurrency;

	 /**
	 * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
	 * @var String $programMembershipUsed
	 */
	protected $programMembershipUsed;

	 /**
	 * The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller. Supersedes <a href="/carrier">carrier</a>.
	 * @var String $provider
	 */
	protected $provider;

	 /**
	 * The thing -- flight, event, restaurant,etc. being reserved.
	 * @var String $reservationFor
	 */
	protected $reservationFor;

	 /**
	 * A unique identifier for the reservation.
	 * @var String $reservationId
	 */
	protected $reservationId;

	 /**
	 * The current status of the reservation.
	 * @var String $reservationStatus
	 */
	protected $reservationStatus;

	 /**
	 * A ticket associated with the reservation.
	 * @var String $reservedTicket
	 */
	protected $reservedTicket;

	 /**
	 * The total price for the reservation or ticket, including applicable taxes, shipping, etc.<br><br>
	 * 
	 * Usage guidelines:<br><br><ul>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $totalPrice
	 */
	protected $totalPrice;

	 /**
	 * The person or organization the reservation or ticket is for.
	 * @var String $underName
	 */
	protected $underName;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBookingTime($x){
		$this->bookingTime = new Text('bookingTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBroker($x){
		$this->broker = new Text('broker',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setModifiedTime($x){
		$this->modifiedTime = new Text('modifiedTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceCurrency($x){
		$this->priceCurrency = new Text('priceCurrency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProgramMembershipUsed($x){
		$this->programMembershipUsed = new Text('programMembershipUsed',$x);
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
	public function setReservationFor($x){
		$this->reservationFor = new Text('reservationFor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReservationId($x){
		$this->reservationId = new Text('reservationId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReservationStatus($x){
		$this->reservationStatus = new Text('reservationStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReservedTicket($x){
		$this->reservedTicket = new Text('reservedTicket',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTotalPrice($x){
		$this->totalPrice = new Text('totalPrice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnderName($x){
		$this->underName = new Text('underName',$x);
		return $this;
	}


}