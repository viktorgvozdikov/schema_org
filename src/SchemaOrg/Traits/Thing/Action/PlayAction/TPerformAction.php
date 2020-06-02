<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\PlayAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPerformAction{
	 /**
	 * A sub property of location. The entertainment business where the action occurred.
	 * @var String $entertainmentBusiness
	 */
	protected $entertainmentBusiness;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEntertainmentBusiness($x){
		$this->entertainmentBusiness = new Text('entertainmentBusiness',$x);
		return $this;
	}


}