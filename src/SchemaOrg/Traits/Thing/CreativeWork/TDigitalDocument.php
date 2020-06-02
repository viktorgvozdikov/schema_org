<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDigitalDocument{
	 /**
	 * A permission related to the access to this document (e.g. permission to read or write an electronic document). For a public document, specify a grantee with an Audience with audienceType equal to "public".
	 * @var String $hasDigitalDocumentPermission
	 */
	protected $hasDigitalDocumentPermission;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasDigitalDocumentPermission($x){
		$this->hasDigitalDocumentPermission = new Text('hasDigitalDocumentPermission',$x);
		return $this;
	}


}