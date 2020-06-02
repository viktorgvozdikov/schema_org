<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOrganizationRole{
	 /**
	 * A number associated with a role in an organization, for example, the number on an athlete's jersey.
	 * @var String $numberedPosition
	 */
	protected $numberedPosition;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberedPosition($x){
		$this->numberedPosition = new Text('NumberedPosition',$x);
		return $this;
	}


}