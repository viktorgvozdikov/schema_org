<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TNutritionInformation{
	 /**
	 * The number of calories.
	 * @var String $calories
	 */
	protected $calories;

	 /**
	 * The number of grams of carbohydrates.
	 * @var String $carbohydrateContent
	 */
	protected $carbohydrateContent;

	 /**
	 * The number of milligrams of cholesterol.
	 * @var String $cholesterolContent
	 */
	protected $cholesterolContent;

	 /**
	 * The number of grams of fat.
	 * @var String $fatContent
	 */
	protected $fatContent;

	 /**
	 * The number of grams of fiber.
	 * @var String $fiberContent
	 */
	protected $fiberContent;

	 /**
	 * The number of grams of protein.
	 * @var String $proteinContent
	 */
	protected $proteinContent;

	 /**
	 * The number of grams of saturated fat.
	 * @var String $saturatedFatContent
	 */
	protected $saturatedFatContent;

	 /**
	 * The serving size, in terms of the number of volume or mass.
	 * @var String $servingSize
	 */
	protected $servingSize;

	 /**
	 * The number of milligrams of sodium.
	 * @var String $sodiumContent
	 */
	protected $sodiumContent;

	 /**
	 * The number of grams of sugar.
	 * @var String $sugarContent
	 */
	protected $sugarContent;

	 /**
	 * The number of grams of trans fat.
	 * @var String $transFatContent
	 */
	protected $transFatContent;

	 /**
	 * The number of grams of unsaturated fat.
	 * @var String $unsaturatedFatContent
	 */
	protected $unsaturatedFatContent;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCalories($x){
		$this->calories = new Text('Calories',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCarbohydrateContent($x){
		$this->carbohydrateContent = new Text('CarbohydrateContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCholesterolContent($x){
		$this->cholesterolContent = new Text('CholesterolContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFatContent($x){
		$this->fatContent = new Text('FatContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFiberContent($x){
		$this->fiberContent = new Text('FiberContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProteinContent($x){
		$this->proteinContent = new Text('ProteinContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSaturatedFatContent($x){
		$this->saturatedFatContent = new Text('SaturatedFatContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServingSize($x){
		$this->servingSize = new Text('ServingSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSodiumContent($x){
		$this->sodiumContent = new Text('SodiumContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSugarContent($x){
		$this->sugarContent = new Text('SugarContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTransFatContent($x){
		$this->transFatContent = new Text('TransFatContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnsaturatedFatContent($x){
		$this->unsaturatedFatContent = new Text('UnsaturatedFatContent',$x);
		return $this;
	}


}