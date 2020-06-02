<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\MedicalOrganization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPhysician{
	 /**
	 * A medical service available from this provider.
	 * @var String $availableService
	 */
	protected $availableService;

	 /**
	 * A hospital with which the physician or office is affiliated.
	 * @var String $hospitalAffiliation
	 */
	protected $hospitalAffiliation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableService($x){
		$this->availableService = new Text('availableService',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHospitalAffiliation($x){
		$this->hospitalAffiliation = new Text('hospitalAffiliation',$x);
		return $this;
	}


}