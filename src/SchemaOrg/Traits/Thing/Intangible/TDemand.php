<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDemand{
	 /**
	 * The payment method(s) accepted by seller for this offer.
	 * @var String $acceptedPaymentMethod
	 */
	protected $acceptedPaymentMethod;

	 /**
	 * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
	 * @var String $advanceBookingRequirement
	 */
	protected $advanceBookingRequirement;

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
	 * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
	 * @var String $mpn
	 */
	protected $mpn;

	 /**
	 * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
	 * @var String $priceSpecification
	 */
	protected $priceSpecification;

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
		$this->acceptedPaymentMethod = new Text('acceptedPaymentMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdvanceBookingRequirement($x){
		$this->advanceBookingRequirement = new Text('advanceBookingRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAreaServed($x){
		$this->areaServed = new Text('areaServed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailability($x){
		$this->availability = new Text('availability',$x);
		return $this;
	}

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
	public function setAvailableAtOrFrom($x){
		$this->availableAtOrFrom = new Text('availableAtOrFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableDeliveryMethod($x){
		$this->availableDeliveryMethod = new Text('availableDeliveryMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBusinessFunction($x){
		$this->businessFunction = new Text('businessFunction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDeliveryLeadTime($x){
		$this->deliveryLeadTime = new Text('deliveryLeadTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleCustomerType($x){
		$this->eligibleCustomerType = new Text('eligibleCustomerType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleDuration($x){
		$this->eligibleDuration = new Text('eligibleDuration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEligibleQuantity($x){
		$this->eligibleQuantity = new Text('eligibleQuantity',$x);
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
	public function setEligibleTransactionVolume($x){
		$this->eligibleTransactionVolume = new Text('eligibleTransactionVolume',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin($x){
		$this->gtin = new Text('gtin',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin12($x){
		$this->gtin12 = new Text('gtin12',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin13($x){
		$this->gtin13 = new Text('gtin13',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin14($x){
		$this->gtin14 = new Text('gtin14',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGtin8($x){
		$this->gtin8 = new Text('gtin8',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludesObject($x){
		$this->includesObject = new Text('includesObject',$x);
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
	public function setInventoryLevel($x){
		$this->inventoryLevel = new Text('inventoryLevel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemCondition($x){
		$this->itemCondition = new Text('itemCondition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemOffered($x){
		$this->itemOffered = new Text('itemOffered',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMpn($x){
		$this->mpn = new Text('mpn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPriceSpecification($x){
		$this->priceSpecification = new Text('priceSpecification',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeller($x){
		$this->seller = new Text('seller',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSerialNumber($x){
		$this->serialNumber = new Text('serialNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSku($x){
		$this->sku = new Text('sku',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidFrom($x){
		$this->validFrom = new Text('validFrom',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValidThrough($x){
		$this->validThrough = new Text('validThrough',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWarranty($x){
		$this->warranty = new Text('warranty',$x);
		return $this;
	}


}