<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Service;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWebAPI{
	 /**
	 * Further documentation describing the Web API in more detail.
	 * @var String $documentation
	 */
	protected $documentation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDocumentation($x){
		$this->documentation = new Text('Documentation',$x);
		return $this;
	}


}