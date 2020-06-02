<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTicket{
	 /**
	 * The date the ticket was issued.
	 * @var String $dateIssued
	 */
	protected $dateIssued;

	 /**
	 * The organization issuing the ticket or permit.
	 * @var String $issuedBy
	 */
	protected $issuedBy;

	 /**
	 * The currency of the price, or a price component when attached to <a class="localLink" href="/PriceSpecification">PriceSpecification</a> and its subtypes.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $priceCurrency
	 */
	protected $priceCurrency;

	 /**
	 * The unique identifier for the ticket.
	 * @var String $ticketNumber
	 */
	protected $ticketNumber;

	 /**
	 * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
	 * @var String $ticketToken
	 */
	protected $ticketToken;

	 /**
	 * The seat associated with the ticket.
	 * @var String $ticketedSeat
	 */
	protected $ticketedSeat;

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
	public function setDateIssued($x){
		$this->dateIssued = new Text('DateIssued',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssuedBy($x){
		$this->issuedBy = new Text('IssuedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceCurrency($x){
		$this->priceCurrency = new Text('PriceCurrency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTicketNumber($x){
		$this->ticketNumber = new Text('TicketNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTicketToken($x){
		$this->ticketToken = new Text('TicketToken',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTicketedSeat($x){
		$this->ticketedSeat = new Text('TicketedSeat',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTotalPrice($x){
		$this->totalPrice = new Text('TotalPrice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnderName($x){
		$this->underName = new Text('UnderName',$x);
		return $this;
	}


}