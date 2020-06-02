<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWebSite{
	 /**
	 * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	 * @var String $issn
	 */
	protected $issn;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssn($x){
		$this->issn = new Text('issn',$x);
		return $this;
	}


}