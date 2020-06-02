<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDigitalDocumentPermission{
	 /**
	 * The person, organization, contact point, or audience that has been granted this permission.
	 * @var String $grantee
	 */
	protected $grantee;

	 /**
	 * The type of permission granted the person, organization, or audience.
	 * @var String $permissionType
	 */
	protected $permissionType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setGrantee($x){
		$this->grantee = new Text('grantee',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPermissionType($x){
		$this->permissionType = new Text('permissionType',$x);
		return $this;
	}


}