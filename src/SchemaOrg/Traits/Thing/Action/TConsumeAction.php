<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TConsumeAction{
	 /**
	 * A set of requirements that a must be fulfilled in order to perform an Action. If more than one value is specied, fulfilling one set of requirements will allow the Action to be performed.
	 * @var String $actionAccessibilityRequirement
	 */
	protected $actionAccessibilityRequirement;

	 /**
	 * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
	 * @var String $expectsAcceptanceOf
	 */
	protected $expectsAcceptanceOf;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActionAccessibilityRequirement($x){
		$this->actionAccessibilityRequirement = new Text('actionAccessibilityRequirement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExpectsAcceptanceOf($x){
		$this->expectsAcceptanceOf = new Text('expectsAcceptanceOf',$x);
		return $this;
	}


}