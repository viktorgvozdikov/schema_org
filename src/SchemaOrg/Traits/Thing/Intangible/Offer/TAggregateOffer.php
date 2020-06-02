<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Offer;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAggregateOffer{
	 /**
	 * The highest price of all offers available.<br><br>
	 * 
	 * Usage guidelines:<br><br><ul>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $highPrice
	 */
	protected $highPrice;

	 /**
	 * The lowest price of all offers available.<br><br>
	 * 
	 * Usage guidelines:<br><br><ul>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $lowPrice
	 */
	protected $lowPrice;

	 /**
	 * The number of offers for the product.
	 * @var String $offerCount
	 */
	protected $offerCount;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHighPrice($x){
		$this->highPrice = new Text('highPrice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLowPrice($x){
		$this->lowPrice = new Text('lowPrice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOfferCount($x){
		$this->offerCount = new Text('offerCount',$x);
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


}