<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Dataset;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDataFeed{
	 /**
	 * An item within in a data feed. Data feeds may have many elements.
	 * @var String $dataFeedElement
	 */
	protected $dataFeedElement;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDataFeedElement($x){
		$this->dataFeedElement = new Text('dataFeedElement',$x);
		return $this;
	}


}