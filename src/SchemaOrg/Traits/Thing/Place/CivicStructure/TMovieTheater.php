<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place\CivicStructure;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMovieTheater{
	 /**
	 * The number of screens in the movie theater.
	 * @var String $screenCount
	 */
	protected $screenCount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setScreenCount($x){
		$this->screenCount = new Text('ScreenCount',$x);
		return $this;
	}


}