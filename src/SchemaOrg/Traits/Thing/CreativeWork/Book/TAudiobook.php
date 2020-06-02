<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Book;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAudiobook{
	 /**
	 * A person who reads (performs) the audiobook.
	 * @var String $readBy
	 */
	protected $readBy;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setReadBy($x){
		$this->readBy = new Text('ReadBy',$x);
		return $this;
	}


}