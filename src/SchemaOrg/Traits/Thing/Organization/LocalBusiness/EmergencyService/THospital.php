<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\EmergencyService;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THospital{
	 /**
	 * A medical service available from this provider.
	 * @var String $availableService
	 */
	protected $availableService;

	 /**
	 * Indicates data describing a hospital, e.g. a CDC <a class="localLink" href="/CDCPMDRecord">CDCPMDRecord</a> or as some kind of <a class="localLink" href="/Dataset">Dataset</a>.
	 * @var String $healthcareReportingData
	 */
	protected $healthcareReportingData;


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
	public function setHealthcareReportingData($x){
		$this->healthcareReportingData = new Text('healthcareReportingData',$x);
		return $this;
	}


}