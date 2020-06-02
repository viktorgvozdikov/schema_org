<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebPage;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TRealEstateListing{
	 /**
	 * Publication date of an online listing.
	 * @var String $datePosted
	 */
	protected $datePosted;

	 /**
	 * Length of the lease for some <a class="localLink" href="/Accommodation">Accommodation</a>, either particular to some <a class="localLink" href="/Offer">Offer</a> or in some cases intrinsic to the property.
	 * @var String $leaseLength
	 */
	protected $leaseLength;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDatePosted($x){
		$this->datePosted = new Text('datePosted',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLeaseLength($x){
		$this->leaseLength = new Text('leaseLength',$x);
		return $this;
	}


}