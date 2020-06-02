<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSportsOrganization{
	 /**
	 * A type of sport (e.g. Baseball).
	 * @var String $sport
	 */
	protected $sport;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSport($x){
		$this->sport = new Text('sport',$x);
		return $this;
	}


}