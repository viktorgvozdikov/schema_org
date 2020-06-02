<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMenuItem{
	 /**
	 * Additional menu item(s) such as a side dish of salad or side order of fries that can be added to this menu item. Additionally it can be a menu section containing allowed add-on menu items for this menu item.
	 * @var String $menuAddOn
	 */
	protected $menuAddOn;

	 /**
	 * Nutrition information about the recipe or menu item.
	 * @var String $nutrition
	 */
	protected $nutrition;

	 /**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use <a class="localLink" href="/businessFunction">businessFunction</a> to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a <a class="localLink" href="/Demand">Demand</a>. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer.<br> Inverse property: <a href="/itemOffered">itemOffered</a>.
	 * @var String $offers
	 */
	protected $offers;

	 /**
	 * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
	 * @var String $suitableForDiet
	 */
	protected $suitableForDiet;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMenuAddOn($x){
		$this->menuAddOn = new Text('MenuAddOn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNutrition($x){
		$this->nutrition = new Text('Nutrition',$x);
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
	public function setSuitableForDiet($x){
		$this->suitableForDiet = new Text('SuitableForDiet',$x);
		return $this;
	}


}