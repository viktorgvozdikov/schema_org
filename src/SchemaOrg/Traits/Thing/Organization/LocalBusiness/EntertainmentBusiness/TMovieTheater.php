<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness\EntertainmentBusiness;

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
		$this->screenCount = new Text('screenCount',$x);
		return $this;
	}


}