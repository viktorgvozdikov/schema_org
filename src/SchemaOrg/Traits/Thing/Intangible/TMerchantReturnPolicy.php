<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMerchantReturnPolicy{
	 /**
	 * Are in-store returns offered?
	 * @var String $inStoreReturnsOffered
	 */
	protected $inStoreReturnsOffered;

	 /**
	 * The merchantReturnDays property indicates the number of days (from purchase) within which relevant merchant return policy is applicable. Supersedes <a title="Defined in section: attic.schema.org" class="ext ext-attic" href="/productReturnDays">productReturnDays</a>.
	 * @var String $merchantReturnDays
	 */
	protected $merchantReturnDays;

	 /**
	 * Indicates a Web page or service by URL, for product return. Supersedes <a title="Defined in section: attic.schema.org" class="ext ext-attic" href="/productReturnLink">productReturnLink</a>.
	 * @var String $merchantReturnLink
	 */
	protected $merchantReturnLink;

	 /**
	 * A refundType, from an enumerated list.
	 * @var String $refundType
	 */
	protected $refundType;

	 /**
	 * Indicates (via enumerated options) the return fees policy for a MerchantReturnPolicy
	 * @var String $returnFees
	 */
	protected $returnFees;

	 /**
	 * A returnPolicyCategory expresses at most one of several enumerated kinds of return.
	 * @var String $returnPolicyCategory
	 */
	protected $returnPolicyCategory;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInStoreReturnsOffered($x){
		$this->inStoreReturnsOffered = new Text('InStoreReturnsOffered',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMerchantReturnDays($x){
		$this->merchantReturnDays = new Text('MerchantReturnDays',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMerchantReturnLink($x){
		$this->merchantReturnLink = new Text('MerchantReturnLink',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRefundType($x){
		$this->refundType = new Text('RefundType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReturnFees($x){
		$this->returnFees = new Text('ReturnFees',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReturnPolicyCategory($x){
		$this->returnPolicyCategory = new Text('ReturnPolicyCategory',$x);
		return $this;
	}


}