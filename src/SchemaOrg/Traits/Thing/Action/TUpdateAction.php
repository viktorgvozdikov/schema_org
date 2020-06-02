<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TUpdateAction{
	 /**
	 * A sub property of object. The collection target of the action. Supersedes <a href="/collection">collection</a>.
	 * @var String $targetCollection
	 */
	protected $targetCollection;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetCollection($x){
		$this->targetCollection = new Text('targetCollection',$x);
		return $this;
	}


}