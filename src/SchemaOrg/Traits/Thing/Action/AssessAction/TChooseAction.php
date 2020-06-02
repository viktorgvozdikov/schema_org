<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\AssessAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TChooseAction{
	 /**
	 * A sub property of object. The options subject to this action. Supersedes <a href="/option">option</a>.
	 * @var String $actionOption
	 */
	protected $actionOption;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActionOption($x){
		$this->actionOption = new Text('actionOption',$x);
		return $this;
	}


}