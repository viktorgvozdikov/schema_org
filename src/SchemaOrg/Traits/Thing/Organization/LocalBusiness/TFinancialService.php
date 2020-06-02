<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TFinancialService{
	 /**
	 * Description of fees, commissions, and other terms applied either to a class of financial product, or by a financial service organization.
	 * @var String $feesAndCommissionsSpecification
	 */
	protected $feesAndCommissionsSpecification;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setFeesAndCommissionsSpecification($x){
		$this->feesAndCommissionsSpecification = new Text('FeesAndCommissionsSpecification',$x);
		return $this;
	}


}