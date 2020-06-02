<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCreativeWorkSeries{
	 /**
	 * The end date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $endDate
	 */
	protected $endDate;

	 /**
	 * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	 * @var String $issn
	 */
	protected $issn;

	 /**
	 * The start date and time of the item (in <a href="http://en.wikipedia.org/wiki/ISO_8601">ISO 8601 date format</a>).
	 * @var String $startDate
	 */
	protected $startDate;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEndDate($x){
		$this->endDate = new Text('EndDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssn($x){
		$this->issn = new Text('Issn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStartDate($x){
		$this->startDate = new Text('StartDate',$x);
		return $this;
	}


}