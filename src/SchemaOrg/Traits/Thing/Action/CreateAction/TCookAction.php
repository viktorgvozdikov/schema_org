<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\CreateAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCookAction{
	 /**
	 * A sub property of location. The specific food establishment where the action occurred.
	 * @var String $foodEstablishment
	 */
	protected $foodEstablishment;

	 /**
	 * A sub property of location. The specific food event where the action occurred.
	 * @var String $foodEvent
	 */
	protected $foodEvent;

	 /**
	 * A sub property of instrument. The recipe/instructions used to perform the action.
	 * @var String $recipe
	 */
	protected $recipe;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setFoodEstablishment($x){
		$this->foodEstablishment = new Text('foodEstablishment',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFoodEvent($x){
		$this->foodEvent = new Text('foodEvent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipe($x){
		$this->recipe = new Text('recipe',$x);
		return $this;
	}


}