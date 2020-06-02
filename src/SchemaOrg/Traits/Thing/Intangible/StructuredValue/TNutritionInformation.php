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
		$this->calories = new Text('calories',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCarbohydrateContent($x){
		$this->carbohydrateContent = new Text('carbohydrateContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCholesterolContent($x){
		$this->cholesterolContent = new Text('cholesterolContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFatContent($x){
		$this->fatContent = new Text('fatContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFiberContent($x){
		$this->fiberContent = new Text('fiberContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProteinContent($x){
		$this->proteinContent = new Text('proteinContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSaturatedFatContent($x){
		$this->saturatedFatContent = new Text('saturatedFatContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServingSize($x){
		$this->servingSize = new Text('servingSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSodiumContent($x){
		$this->sodiumContent = new Text('sodiumContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSugarContent($x){
		$this->sugarContent = new Text('sugarContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTransFatContent($x){
		$this->transFatContent = new Text('transFatContent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnsaturatedFatContent($x){
		$this->unsaturatedFatContent = new Text('unsaturatedFatContent',$x);
		return $this;
	}


}