<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFoodEstablishment{
	 /**
	 * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, an URL at which reservations can be made or (for backwards compatibility) the strings <code>Yes</code> or <code>No</code>.
	 * @var String $acceptsReservations
	 */
	protected $acceptsReservations;

	 /**
	 * Either the actual menu as a structured representation, as text, or a URL of the menu. Supersedes <a href="/menu">menu</a>.
	 * @var String $hasMenu
	 */
	protected $hasMenu;

	 /**
	 * The cuisine of the restaurant.
	 * @var String $servesCuisine
	 */
	protected $servesCuisine;

	 /**
	 * An official rating for a lodging business or food establishment, e.g. from national associations or standards bodies. Use the author property to indicate the rating organization, e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
	 * @var String $starRating
	 */
	protected $starRating;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcceptsReservations($x){
		$this->acceptsReservations = new Text('AcceptsReservations',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasMenu($x){
		$this->hasMenu = new Text('HasMenu',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServesCuisine($x){
		$this->servesCuisine = new Text('ServesCuisine',$x);
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