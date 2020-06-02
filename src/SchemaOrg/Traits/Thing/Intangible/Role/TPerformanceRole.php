<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPerformanceRole{
	 /**
	 * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
	 * @var String $characterName
	 */
	protected $characterName;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCharacterName($x){
		$this->characterName = new Text('CharacterName',$x);
		return $this;
	}


}