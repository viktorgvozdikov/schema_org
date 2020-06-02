<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReport{
	 /**
	 * The number or other unique designator assigned to a Report by the publishing organization.
	 * @var String $reportNumber
	 */
	protected $reportNumber;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setReportNumber($x){
		$this->reportNumber = new Text('ReportNumber',$x);
		return $this;
	}


}