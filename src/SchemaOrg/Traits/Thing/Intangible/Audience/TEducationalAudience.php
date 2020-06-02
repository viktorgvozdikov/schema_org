<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Audience;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEducationalAudience{
	 /**
	 * An educationalRole of an EducationalAudience.
	 * @var String $educationalRole
	 */
	protected $educationalRole;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalRole($x){
		$this->educationalRole = new Text('educationalRole',$x);
		return $this;
	}


}