<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TProduct{
	 /**
	 * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.<br><br>
	 * 
	 * Note: Publishers should be aware that applications designed to use specific schema.org properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...) will typically expect such data to be provided using those properties, rather than using the generic property/value mechanism.
	 * @var String $additionalProperty
	 */
	protected $additionalProperty;

	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * An intended audience, i.e. a group for whom something was created. Supersedes <a href="/serviceAudience">serviceAudience</a>.
	 * @var String $audience
	 */
	protected $audience;

	 /**
	 * An award won by or for this item. Supersedes <a href="/awards">awards</a>.
	 * @var String $award
	 */
	protected $award;

	 /**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	 * @var String $brand
	 */
	protected $brand;

	 /**
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @var String $category
	 */
	protected $category;

	 /**
	 * The color of the product.
	 * @var String $color
	 */
	protected $color;

	 /**
	 * The depth of the item.
	 * @var String $depth
	 */
	protected $depth;

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
	 * Indicates a MerchantReturnPolicy that may be applicable. Supersedes <a title="Defined in section: attic.schema.org" class="ext ext-attic" href="/hasProductReturnPolicy">hasProductReturnPolicy</a>.
	 * @var String $hasMerchantReturnPolicy
	 */
	protected $hasMerchantReturnPolicy;

	 /**
	 * The height of the item.
	 * @var String $height
	 */
	protected $height;

	 /**
	 * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
	 * @var String $isAccessoryOrSparePartFor
	 */
	protected $isAccessoryOrSparePartFor;

	 /**
	 * A pointer to another product (or multiple products) for which this product is a consumable.
	 * @var String $isConsumableFor
	 */
	protected $isConsumableFor;

	 /**
	 * A pointer to another, somehow related product (or multiple products).
	 * @var String $isRelatedTo
	 */
	protected $isRelatedTo;

	 /**
	 * A pointer to another, functionally similar product (or multiple products).
	 * @var String $isSimilarTo
	 */
	protected $isSimilarTo;

	 /**
	 * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
	 * @var String $itemCondition
	 */
	protected $itemCondition;

	 /**
	 * An associated logo.
	 * @var String $logo
	 */
	protected $logo;

	 /**
	 * The manufacturer of the product.
	 * @var String $manufacturer
	 */
	protected $manufacturer;

	 /**
	 * A material that something is made from, e.g. leather, wool, cotton, paper.
	 * @var String $material
	 */
	protected $material;

	 /**
	 * The model of the product. Use with the URL of a ProductModel or a textual representation of the model identifier. The URL of the ProductModel can be from an external source. It is recommended to additionally provide strong product identifiers via the gtin8/gtin13/gtin14 and mpn properties.
	 * @var String $model
	 */
	protected $model;

	 /**
	 * The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.
	 * @var String $mpn
	 */
	protected $mpn;

	 /**
	 * Indicates the <a href="https://en.wikipedia.org/wiki/NATO_Stock_Number">NATO stock number</a> (nsn) of a <a class="localLink" href="/Product">Product</a>.
	 * @var String $nsn
	 */
	protected $nsn;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;

	 /**
	 * The product identifier, such as ISBN. For example: <code>meta itemprop="productID" content="isbn:123-456-789"</code>.
	 * @var String $productID
	 */
	protected $productID;

	 /**
	 * The date of production of the item, e.g. vehicle.
	 * @var String $productionDate
	 */
	protected $productionDate;

	 /**
	 * The date the item e.g. vehicle was purchased by the current owner.
	 * @var String $purchaseDate
	 */
	protected $purchaseDate;

	 /**
	 * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
	 * @var String $releaseDate
	 */
	protected $releaseDate;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.
	 * @var String $sku
	 */
	protected $sku;

	 /**
	 * A slogan or motto associated with the item.
	 * @var String $slogan
	 */
	protected $slogan;

	 /**
	 * The weight of the product or person.
	 * @var String $weight
	 */
	protected $weight;

	 /**
	 * The width of the item.
	 * @var String $width
	 */
	protected $width;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalProperty($x){
		$this->additionalProperty = new Text('AdditionalProperty',$x);
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
	public function setAudience($x){
		$this->audience = new Text('Audience',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAward($x){
		$this->award = new Text('Award',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBrand($x){
		$this->brand = new Text('Brand',$x);
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
	public function setColor($x){
		$this->color = new Text('Color',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepth($x){
		$this->depth = new Text('Depth',$x);
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
	public function setHasMerchantReturnPolicy($x){
		$this->hasMerchantReturnPolicy = new Text('HasMerchantReturnPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHeight($x){
		$this->height = new Text('Height',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsAccessoryOrSparePartFor($x){
		$this->isAccessoryOrSparePartFor = new Text('IsAccessoryOrSparePartFor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsConsumableFor($x){
		$this->isConsumableFor = new Text('IsConsumableFor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsRelatedTo($x){
		$this->isRelatedTo = new Text('IsRelatedTo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsSimilarTo($x){
		$this->isSimilarTo = new Text('IsSimilarTo',$x);
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
	public function setLogo($x){
		$this->logo = new Text('Logo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setManufacturer($x){
		$this->manufacturer = new Text('Manufacturer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaterial($x){
		$this->material = new Text('Material',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setModel($x){
		$this->model = new Text('Model',$x);
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
	public function setNsn($x){
		$this->nsn = new Text('Nsn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOffers($x){
		$this->offers = new Text('Offers',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProductID($x){
		$this->productID = new Text('ProductID',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProductionDate($x){
		$this->productionDate = new Text('ProductionDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPurchaseDate($x){
		$this->purchaseDate = new Text('PurchaseDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReleaseDate($x){
		$this->releaseDate = new Text('ReleaseDate',$x);
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
	public function setSku($x){
		$this->sku = new Text('Sku',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSlogan($x){
		$this->slogan = new Text('Slogan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWeight($x){
		$this->weight = new Text('Weight',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWidth($x){
		$this->width = new Text('Width',$x);
		return $this;
	}


}