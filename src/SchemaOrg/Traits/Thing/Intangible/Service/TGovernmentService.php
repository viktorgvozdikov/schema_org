<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TGovernmentService{
	 /**
	 * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
	 * @var String $jurisdiction
	 */
	protected $jurisdiction;

	 /**
	 * The operating organization, if different from the provider.  This enables the representation of services that are provided by an organization, but operated by another organization like a subcontractor.
	 * @var String $serviceOperator
	 */
	protected $serviceOperator;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setJurisdiction($x){
		$this->jurisdiction = new Text('Jurisdiction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServiceOperator($x){
		$this->serviceOperator = new Text('ServiceOperator',$x);
		return $this;
	}


}