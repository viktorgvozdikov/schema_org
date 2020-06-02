<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMediaSubscription{
	 /**
	 * The Organization responsible for authenticating the user's subscription. For example, many media apps require a cable/satellite provider to authenticate your subscription before playing media.
	 * @var String $authenticator
	 */
	protected $authenticator;

	 /**
	 * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	 * @var String $expectsAcceptanceOf
	 */
	protected $expectsAcceptanceOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAuthenticator($x){
		$this->authenticator = new Text('Authenticator',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectsAcceptanceOf($x){
		$this->expectsAcceptanceOf = new Text('ExpectsAcceptanceOf',$x);
		return $this;
	}


}