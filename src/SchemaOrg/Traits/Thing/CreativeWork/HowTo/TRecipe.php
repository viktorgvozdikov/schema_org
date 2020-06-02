<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\HowTo;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRecipe{
	 /**
	 * The time it takes to actually cook the dish, in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 duration format</a>.
	 * @var String $cookTime
	 */
	protected $cookTime;

	 /**
	 * The method of cooking, such as Frying, Steaming, ...
	 * @var String $cookingMethod
	 */
	protected $cookingMethod;

	 /**
	 * Nutrition information about the recipe or menu item.
	 * @var String $nutrition
	 */
	protected $nutrition;

	 /**
	 * The category of the recipe—for example, appetizer, entree, etc.
	 * @var String $recipeCategory
	 */
	protected $recipeCategory;

	 /**
	 * The cuisine of the recipe (for example, French or Ethiopian).
	 * @var String $recipeCuisine
	 */
	protected $recipeCuisine;

	 /**
	 * A single ingredient used in the recipe, e.g. sugar, flour or garlic. Supersedes <a href="/ingredients">ingredients</a>.
	 * @var String $recipeIngredient
	 */
	protected $recipeIngredient;

	 /**
	 * A step in making the recipe, in the form of a single item (document, video, etc.) or an ordered list with HowToStep and/or HowToSection items.
	 * @var String $recipeInstructions
	 */
	protected $recipeInstructions;

	 /**
	 * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
	 * @var String $recipeYield
	 */
	protected $recipeYield;

	 /**
	 * Indicates a dietary restriction or guideline for which this recipe or menu item is suitable, e.g. diabetic, halal etc.
	 * @var String $suitableForDiet
	 */
	protected $suitableForDiet;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCookTime($x){
		$this->cookTime = new Text('cookTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCookingMethod($x){
		$this->cookingMethod = new Text('cookingMethod',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNutrition($x){
		$this->nutrition = new Text('nutrition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipeCategory($x){
		$this->recipeCategory = new Text('recipeCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipeCuisine($x){
		$this->recipeCuisine = new Text('recipeCuisine',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipeIngredient($x){
		$this->recipeIngredient = new Text('recipeIngredient',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipeInstructions($x){
		$this->recipeInstructions = new Text('recipeInstructions',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRecipeYield($x){
		$this->recipeYield = new Text('recipeYield',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSuitableForDiet($x){
		$this->suitableForDiet = new Text('suitableForDiet',$x);
		return $this;
	}


}