<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\UpdateAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReplaceAction{
	 /**
	 * A sub property of object. The object that is being replaced.
	 * @var String $replacee
	 */
	protected $replacee;

	 /**
	 * A sub property of object. The object that replaces.
	 * @var String $replacer
	 */
	protected $replacer;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setReplacee($x){
		$this->replacee = new Text('replacee',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReplacer($x){
		$this->replacer = new Text('replacer',$x);
		return $this;
	}


}