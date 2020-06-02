<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TEngineSpecification{
	 /**
	 * The volume swept by all of the pistons inside the cylinders of an internal combustion engine in a single movement. <br><br>
	 * 
	 * Typical unit code(s): CMQ for cubic centimeter, LTR for liters, INQ for cubic inches
	 * * Note 1: You can link to information about how the given value has been determined using the <a class="localLink" href="/valueReference">valueReference</a> property.
	 * * Note 2: You can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.
	 * @var String $engineDisplacement
	 */
	protected $engineDisplacement;

	 /**
	 * The power of the vehicle's engine.
	 *     Typical unit code(s): KWT for kilowatt, BHP for brake horsepower, N12 for metric horsepower (PS, with 1 PS = 735,49875 W)<br><br><ul>
	 * <li>Note 1: There are many different ways of measuring an engine's power. For an overview, see  <a href="http://en.wikipedia.org/wiki/Horsepower#Engine_power_test_codes">http://en.wikipedia.org/wiki/Horsepower#Engine<em>power</em>test_codes</a>.</li>
	 * <li>Note 2: You can link to information about how the given value has been determined using the <a class="localLink" href="/valueReference">valueReference</a> property.</li>
	 * <li>Note 3: You can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.</li>
	 * </ul>
	 * 
	 * @var String $enginePower
	 */
	protected $enginePower;

	 /**
	 * The type of engine or engines powering the vehicle.
	 * @var String $engineType
	 */
	protected $engineType;

	 /**
	 * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
	 * @var String $fuelType
	 */
	protected $fuelType;

	 /**
	 * The torque (turning force) of the vehicle's engine.<br><br>
	 * 
	 * Typical unit code(s): NU for newton metre (N m), F17 for pound-force per foot, or F48 for pound-force per inch<br><br><ul>
	 * <li>Note 1: You can link to information about how the given value has been determined (e.g. reference RPM) using the <a class="localLink" href="/valueReference">valueReference</a> property.</li>
	 * <li>Note 2: You can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.</li>
	 * </ul>
	 * 
	 * @var String $torque
	 */
	protected $torque;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setEngineDisplacement($x){
		$this->engineDisplacement = new Text('EngineDisplacement',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEnginePower($x){
		$this->enginePower = new Text('EnginePower',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEngineType($x){
		$this->engineType = new Text('EngineType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFuelType($x){
		$this->fuelType = new Text('FuelType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTorque($x){
		$this->torque = new Text('Torque',$x);
		return $this;
	}


}