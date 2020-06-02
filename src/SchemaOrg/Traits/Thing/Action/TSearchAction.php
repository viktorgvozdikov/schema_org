<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSearchAction{
	 /**
	 * A sub property of instrument. The query used on this action.
	 * @var String $query
	 */
	protected $query;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setQuery($x){
		$this->query = new Text('Query',$x);
		return $this;
	}


}