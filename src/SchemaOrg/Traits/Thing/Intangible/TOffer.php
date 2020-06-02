<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOffer{
	 /**
	 * The payment method(s) accepted by seller for this offer.
	 * @var String $acceptedPaymentMethod
	 */
	protected $acceptedPaymentMethod;

	 /**
	 * An additional offer that can only be obtained in combination with the first base offer (e.g. supplements and extensions that are available for a surcharge).
	 * @var String $addOn
	 */
	protected $addOn;

	 /**
	 * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
	 * @var String $advanceBookingRequirement
	 */
	protected $advanceBookingRequirement;

	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * The geographic area where a service or offered item is provided. Supersedes <a href="/serviceArea">serviceArea</a>.
	 * @var String $areaServed
	 */
	protected $areaServed;

	 /**
	 * The availability of this item—for example In stock, Out of stock, Pre-order, etc.
	 * @var String $availability
	 */
	protected $availability;

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
	 * The place(s) from which the offer can be obtained (e.g. store locations).
	 * @var String $availableAtOrFrom
	 */
	protected $availableAtOrFrom;

	 /**
	 * The delivery method(s) available for this offer.
	 * @var String $availableDeliveryMethod
	 */
	protected $availableDeliveryMethod;

	 /**
	 * The business function (e.g. sell, lease, repair, dispose) of the offer or component of a bundle (TypeAndQuantityNode). The default is http://purl.org/goodrelations/v1#Sell.
	 * @var String $businessFunction
	 */
	protected $businessFunction;

	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;

	 /**
	 * The typical delay between the receipt of the order and the goods either leaving the warehouse or being prepared for pickup, in case the delivery method is on site pickup.
	 * @var String $deliveryLeadTime
	 */
	protected $deliveryLeadTime;

	 /**
	 * The type(s) of customers for which the given offer is valid.
	 * @var String $eligibleCustomerType
	 */
	protected $eligibleCustomerType;

	 /**
	 * The duration for which the given offer is valid.
	 * @var String $eligibleDuration
	 */
	protected $eligibleDuration;

	 /**
	 * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
	 * @var String $eligibleQuantity
	 */
	protected $eligibleQuantity;

	 /**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.<br><br>
	 * 
	 * See also <a class="localLink" href="/ineligibleRegion">ineligibleRegion</a>.
	 * @var String $eligibleRegion
	 */
	protected $eligibleRegion;

	 /**
	 * The transaction volume, in a monetary unit, for which the offer or price specification is valid, e.g. for indicating a minimal purchasing volume, to express free shipping above a certain order volume, or to limit the acceptance of credit cards to purchases to a certain minimal amount.
	 * @var String $eligibleTransactionVolume
	 */
	protected $eligibleTransactionVolume;

	 /**
	 * A Global Trade Item Number (<a href="https://www.gs1.org/standards/id-keys/gtin">GTIN</a>). GTINs identify trade items, including products and services, using numeric identification codes. The <a class="localLink" href="/gtin">gtin</a> property generalizes the earlier <a class="localLink" href="/gtin8">gtin8</a>, <a class="localLink" href="/gtin12">gtin12</a>, <a class="localLink" href="/gtin13">gtin13</a>, and <a class="localLink" href="/gtin14">gtin14</a> properties. The GS1 <a href="https://www.gs1.org/standards/Digital-Link/">digital link specifications</a> express GTINs as URLs. A correct <a class="localLink" href="/gtin">gtin</a> value should be a valid GTIN, which means that it should be an all-numeric string of either 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a string. The numeric component should also have a <a href="https://www.gs1.org/services/check-digit-calculator">valid GS1 check digit</a> and meet the other rules for valid GTINs. See also <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1's GTIN Summary</a> and <a href="https://en.wikipedia.org/wiki/Global_Trade_Item_Number">Wikipedia</a> for more details. Left-padding of the gtin values is not required or encouraged.
	 * @var String $gtin
	 */
	protected $gtin;

	 /**
	 * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
	 * @var String $gtin12
	 */
	protected $gtin12;

	 /**
	 * The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
	 * @var String $gtin13
	 */
	protected $gtin13;

	 /**
	 * The GTIN-14 code of the product, or the product to which the offer refers. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
	 * @var String $gtin14
	 */
	protected $gtin14;

	 /**
	 * The <a href="http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx">GTIN-8</a> code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See <a href="http://www.gs1.org/barcodes/technical/idkeys/gtin">GS1 GTIN Summary</a> for more details.
	 * @var String $gtin8
	 */
	protected $gtin8;

	 /**
	 * This links to a node or nodes indicating the exact quantity of the products included in the offer.
	 * @var String $includesObject
	 */
	protected $includesObject;

	 /**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.<br><br>
	 * 
	 * See also <a class="localLink" href="/eligibleRegion">eligibleRegion</a>.
	 * @var String $ineligibleRegion
	 */
	protected $ineligibleRegion;

	 /**
	 * The current approximate inventory level for the item or items.
	 * @var String $inventoryLevel
	 */
	protected $inventoryLevel;

	 /**
	 * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
	 * @var String $itemCondition
	 */
	protected $itemCondition;

	 /**
	 * An item being offered (or demanded). The transactional nature of the offer or demand is documented using <a class="localLink" href="/businessFunction">businessFunction</a>, e.g. sell, lease etc. While several common expected types are listed explicitly in this definition, others can be used. Using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/offers">offers</a>.
	 * @var String $itemOffered
	 */
	protected $itemOffered;

	 /**
	 * Length of the lease for some <a class="localLink" href="/Accommodation">Accommodation</a>, either particular to some <a class="localLink" href="/Offer">Offer</a> or in some cases intrinsic to the property.
	 * @var String $leaseLength
	 */
	protected $leaseLength;

	 /**
	 * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
	 * @var String $mpn
	 */
	protected $mpn;

	 /**
	 * A pointer to the organization or person making the offer.<br> Inverse property: <a href="/makesOffer">makesOffer</a>.
	 * @var String $offeredBy
	 */
	protected $offeredBy;

	 /**
	 * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.<br><br>
	 * 
	 * Usage guidelines:<br><br><ul>
	 * <li>Use the <a class="localLink" href="/priceCurrency">priceCurrency</a> property (with standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR") instead of including <a href="http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign">ambiguous symbols</a> such as '$' in the value.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * <li>Note that both <a href="http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute">RDFa</a> and Microdata syntax allow the use of a "content=" attribute for publishing simple machine-readable values alongside more human-friendly formatting.</li>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * </ul>
	 * 
	 * @var String $price
	 */
	protected $price;

	 /**
	 * The currency of the price, or a price component when attached to <a class="localLink" href="/PriceSpecification">PriceSpecification</a> and its subtypes.<br><br>
	 * 
	 * Use standard formats: <a href="http://en.wikipedia.org/wiki/ISO_4217">ISO 4217 currency format</a> e.g. "USD"; <a href="https://en.wikipedia.org/wiki/List_of_cryptocurrencies">Ticker symbol</a> for cryptocurrencies e.g. "BTC"; well known names for <a href="https://en.wikipedia.org/wiki/Local_exchange_trading_system">Local Exchange Tradings Systems</a> (LETS) and other currency types e.g. "Ithaca HOUR".
	 * @var String $priceCurrency
	 */
	protected $priceCurrency;

	 /**
	 * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
	 * @var String $priceSpecification
	 */
	protected $priceSpecification;

	 /**
	 * The date after which the price is no longer available.
	 * @var String $priceValidUntil
	 */
	protected $priceValidUntil;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * An entity which offers (sells / leases / lends / loans) the services / goods.  A seller may also be a provider. Supersedes <a href="/merchant">merchant</a>, <a href="/vendor">vendor</a>.
	 * @var String $seller
	 */
	protected $seller;

	 /**
	 * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	 * @var String $serialNumber
	 */
	protected $serialNumber;

	 /**
	 * Indicates information about the shipping policies and options associated with an <a class="localLink" href="/Offer">Offer</a>.
	 * @var String $shippingDetails
	 */
	protected $shippingDetails;

	 /**
	 * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
	 * @var String $sku
	 */
	protected $sku;

	 /**
	 * The date when the item becomes valid.
	 * @var String $validFrom
	 */
	protected $validFrom;

	 /**
	 * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
	 * @var String $validThrough
	 */
	protected $validThrough;

	 /**
	 * The warranty promise(s) included in the offer. Supersedes <a href="/warrantyPromise">warrantyPromise</a>.
	 * @var String $warranty
	 */
	protected $warranty;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcceptedPaymentMethod($x){
		$this->acceptedPaymentMethod = new Text('AcceptedPaymentMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddOn($x){
		$this->addOn = new Text('AddOn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdvanceBookingRequirement($x){
		$this->advanceBookingRequirement = new Text('AdvanceBookingRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAggregateRating($x){
		$this->aggregateRating = new Text('AggregateRating',$x);
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
	public function setAvailability($x){
		$this->availability = new Text('Availability',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailabilityEnds($x){
		$this->availabilityEnds = new Text('AvailabilityEnds',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailabilityStarts($x){
		$this->availabilityStarts = new Text('AvailabilityStarts',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableAtOrFrom($x){
		$this->availableAtOrFrom = new Text('AvailableAtOrFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableDeliveryMethod($x){
		$this->availableDeliveryMethod = new Text('AvailableDeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBusinessFunction($x){
		$this->businessFunction = new Text('BusinessFunction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCategory($x){
		$this->category = new Text('Category',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryLeadTime($x){
		$this->deliveryLeadTime = new Text('DeliveryLeadTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleCustomerType($x){
		$this->eligibleCustomerType = new Text('EligibleCustomerType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleDuration($x){
		$this->eligibleDuration = new Text('EligibleDuration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleQuantity($x){
		$this->eligibleQuantity = new Text('EligibleQuantity',$x);
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
	public function setEligibleTransactionVolume($x){
		$this->eligibleTransactionVolume = new Text('EligibleTransactionVolume',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin($x){
		$this->gtin = new Text('Gtin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin12($x){
		$this->gtin12 = new Text('Gtin12',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin13($x){
		$this->gtin13 = new Text('Gtin13',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin14($x){
		$this->gtin14 = new Text('Gtin14',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin8($x){
		$this->gtin8 = new Text('Gtin8',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludesObject($x){
		$this->includesObject = new Text('IncludesObject',$x);
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

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInventoryLevel($x){
		$this->inventoryLevel = new Text('InventoryLevel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemCondition($x){
		$this->itemCondition = new Text('ItemCondition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemOffered($x){
		$this->itemOffered = new Text('ItemOffered',$x);
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
	public function setMpn($x){
		$this->mpn = new Text('Mpn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOfferedBy($x){
		$this->offeredBy = new Text('OfferedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrice($x){
		$this->price = new Text('Price',$x);
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
	public function setPriceSpecification($x){
		$this->priceSpecification = new Text('PriceSpecification',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceValidUntil($x){
		$this->priceValidUntil = new Text('PriceValidUntil',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReview($x){
		$this->review = new Text('Review',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeller($x){
		$this->seller = new Text('Seller',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSerialNumber($x){
		$this->serialNumber = new Text('SerialNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setShippingDetails($x){
		$this->shippingDetails = new Text('ShippingDetails',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSku($x){
		$this->sku = new Text('Sku',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFrom($x){
		$this->validFrom = new Text('ValidFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidThrough($x){
		$this->validThrough = new Text('ValidThrough',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWarranty($x){
		$this->warranty = new Text('Warranty',$x);
		return $this;
	}


}