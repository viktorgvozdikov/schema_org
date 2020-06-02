<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTechArticle{
	 /**
	 * Prerequisites needed to fulfill steps in article.
	 * @var String $dependencies
	 */
	protected $dependencies;

	 /**
	 * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
	 * @var String $proficiencyLevel
	 */
	protected $proficiencyLevel;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDependencies($x){
		$this->dependencies = new Text('Dependencies',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProficiencyLevel($x){
		$this->proficiencyLevel = new Text('ProficiencyLevel',$x);
		return $this;
	}


}