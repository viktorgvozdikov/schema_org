<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCollection{
	 /**
	 * The number of items in the <a class="localLink" href="/Collection">Collection</a>.
	 * @var String $collectionSize
	 */
	protected $collectionSize;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCollectionSize($x){
		$this->collectionSize = new Text('collectionSize',$x);
		return $this;
	}


}