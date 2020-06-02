<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Reservation;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TReservationPackage{
	 /**
	 * The individual reservations included in the package. Typically a repeated property.
	 * @var String $subReservation
	 */
	protected $subReservation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubReservation($x){
		$this->subReservation = new Text('subReservation',$x);
		return $this;
	}


}