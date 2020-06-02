<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\MoveAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTravelAction{
	 /**
	 * The distance travelled, e.g. exercising or travelling.
	 * @var String $distance
	 */
	protected $distance;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDistance($x){
		$this->distance = new Text('Distance',$x);
		return $this;
	}


}