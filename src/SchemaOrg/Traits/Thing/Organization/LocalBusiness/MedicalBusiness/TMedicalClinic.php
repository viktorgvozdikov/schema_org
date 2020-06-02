<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\MedicalBusiness;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalClinic{
	 /**
	 * A medical service available from this provider.
	 * @var String $availableService
	 */
	protected $availableService;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableService($x){
		$this->availableService = new Text('availableService',$x);
		return $this;
	}


}