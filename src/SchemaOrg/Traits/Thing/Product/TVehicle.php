<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Product;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVehicle{
	 /**
	 * The time needed to accelerate the vehicle from a given start velocity to a given target velocity.<br><br>
	 * 
	 * Typical unit code(s): SEC for seconds<br><br><ul>
	 * <li>Note: There are unfortunately no standard unit codes for seconds/0..100 km/h or seconds/0..60 mph. Simply use "SEC" for seconds and indicate the velocities in the <a class="localLink" href="/name">name</a> of the <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a>, or use <a class="localLink" href="/valueReference">valueReference</a> with a <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> of 0..60 mph or 0..100 km/h to specify the reference speeds.</li>
	 * </ul>
	 * 
	 * @var String $accelerationTime
	 */
	protected $accelerationTime;

	 /**
	 * Indicates the design and body style of the vehicle (e.g. station wagon, hatchback, etc.).
	 * @var String $bodyType
	 */
	protected $bodyType;

	 /**
	 * A <a href="https://en.wikipedia.org/wiki/Call_sign">callsign</a>, as used in broadcasting and radio communications to identify people, radio and TV stations, or vehicles.
	 * @var String $callSign
	 */
	protected $callSign;

	 /**
	 * The available volume for cargo or luggage. For automobiles, this is usually the trunk volume.<br><br>
	 * 
	 * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet<br><br>
	 * 
	 * Note: You can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.
	 * @var String $cargoVolume
	 */
	protected $cargoVolume;

	 /**
	 * The date of the first registration of the vehicle with the respective public authorities.
	 * @var String $dateVehicleFirstRegistered
	 */
	protected $dateVehicleFirstRegistered;

	 /**
	 * The drive wheel configuration, i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
	 * @var String $driveWheelConfiguration
	 */
	protected $driveWheelConfiguration;

	 /**
	 * The CO2 emissions in g/km. When used in combination with a QuantitativeValue, put "g/km" into the unitText property of that value, since there is no UN/CEFACT Common Code for "g/km".
	 * @var String $emissionsCO2
	 */
	protected $emissionsCO2;

	 /**
	 * The capacity of the fuel tank or in the case of electric cars, the battery. If there are multiple components for storage, this should indicate the total of all storage of the same type.<br><br>
	 * 
	 * Typical unit code(s): LTR for liters, GLL of US gallons, GLI for UK / imperial gallons, AMH for ampere-hours (for electrical vehicles).
	 * @var String $fuelCapacity
	 */
	protected $fuelCapacity;

	 /**
	 * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).<br><br><ul>
	 * <li>Note 1: There are unfortunately no standard unit codes for liters per 100 km.  Use <a class="localLink" href="/unitText">unitText</a> to indicate the unit of measurement, e.g. L/100 km.</li>
	 * <li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
	 * <li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="/valueReference">valueReference</a> to link the value for the fuel consumption to another value.</li>
	 * </ul>
	 * 
	 * @var String $fuelConsumption
	 */
	protected $fuelConsumption;

	 /**
	 * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).<br><br><ul>
	 * <li>Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter. Use <a class="localLink" href="/unitText">unitText</a> to indicate the unit of measurement, e.g. mpg or km/L.</li>
	 * <li>Note 2: There are two ways of indicating the fuel consumption, <a class="localLink" href="/fuelConsumption">fuelConsumption</a> (e.g. 8 liters per 100 km) and <a class="localLink" href="/fuelEfficiency">fuelEfficiency</a> (e.g. 30 miles per gallon). They are reciprocal.</li>
	 * <li>Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage pattern ("city traffic"). You can use <a class="localLink" href="/valueReference">valueReference</a> to link the value for the fuel economy to another value.</li>
	 * </ul>
	 * 
	 * @var String $fuelEfficiency
	 */
	protected $fuelEfficiency;

	 /**
	 * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
	 * @var String $fuelType
	 */
	protected $fuelType;

	 /**
	 * A textual description of known damages, both repaired and unrepaired.
	 * @var String $knownVehicleDamages
	 */
	protected $knownVehicleDamages;

	 /**
	 * Indicates that the vehicle meets the respective emission standard.
	 * @var String $meetsEmissionStandard
	 */
	protected $meetsEmissionStandard;

	 /**
	 * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.<br><br>
	 * 
	 * Typical unit code(s): KMT for kilometers, SMI for statute miles
	 * @var String $mileageFromOdometer
	 */
	protected $mileageFromOdometer;

	 /**
	 * The release date of a vehicle model (often used to differentiate versions of the same make and model).
	 * @var String $modelDate
	 */
	protected $modelDate;

	 /**
	 * The number or type of airbags in the vehicle.
	 * @var String $numberOfAirbags
	 */
	protected $numberOfAirbags;

	 /**
	 * The number of axles.<br><br>
	 * 
	 * Typical unit code(s): C62
	 * @var String $numberOfAxles
	 */
	protected $numberOfAxles;

	 /**
	 * The number of doors.<br><br>
	 * 
	 * Typical unit code(s): C62
	 * @var String $numberOfDoors
	 */
	protected $numberOfDoors;

	 /**
	 * The total number of forward gears available for the transmission system of the vehicle.<br><br>
	 * 
	 * Typical unit code(s): C62
	 * @var String $numberOfForwardGears
	 */
	protected $numberOfForwardGears;

	 /**
	 * The number of owners of the vehicle, including the current one.<br><br>
	 * 
	 * Typical unit code(s): C62
	 * @var String $numberOfPreviousOwners
	 */
	protected $numberOfPreviousOwners;

	 /**
	 * The permitted weight of passengers and cargo, EXCLUDING the weight of the empty vehicle.<br><br>
	 * 
	 * Typical unit code(s): KGM for kilogram, LBR for pound<br><br><ul>
	 * <li>Note 1: Many databases specify the permitted TOTAL weight instead, which is the sum of <a class="localLink" href="/weight">weight</a> and <a class="localLink" href="/payload">payload</a>
	 * </li>
	 * <li>Note 2: You can indicate additional information in the <a class="localLink" href="/name">name</a> of the <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> node.</li>
	 * <li>Note 3: You may also link to a <a class="localLink" href="/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="/valueReference">valueReference</a>.</li>
	 * <li>Note 4: Note that you can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.</li>
	 * </ul>
	 * 
	 * @var String $payload
	 */
	protected $payload;

	 /**
	 * The number of persons that can be seated (e.g. in a vehicle), both in terms of the physical space available, and in terms of limitations set by law.<br><br>
	 * 
	 * Typical unit code(s): C62 for persons
	 * @var String $seatingCapacity
	 */
	protected $seatingCapacity;

	 /**
	 * The speed range of the vehicle. If the vehicle is powered by an engine, the upper limit of the speed range (indicated by <a class="localLink" href="/maxValue">maxValue</a> should be the maximum speed achievable under regular conditions.<br><br>
	 * 
	 * Typical unit code(s): KMH for km/h, HM for mile per hour (0.447 04 m/s), KNT for knot<br><br>
	 * 
	 * *Note 1: Use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate the range. Typically, the minimal value is zero.
	 * * Note 2: There are many different ways of measuring the speed range. You can link to information about how the given value has been determined using the <a class="localLink" href="/valueReference">valueReference</a> property.
	 * @var String $speed
	 */
	protected $speed;

	 /**
	 * The position of the steering wheel or similar device (mostly for cars).
	 * @var String $steeringPosition
	 */
	protected $steeringPosition;

	 /**
	 * The permitted vertical load (TWR) of a trailer attached to the vehicle. Also referred to as Tongue Load Rating (TLR) or Vertical Load Rating (VLR)<br><br>
	 * 
	 * Typical unit code(s): KGM for kilogram, LBR for pound<br><br><ul>
	 * <li>Note 1: You can indicate additional information in the <a class="localLink" href="/name">name</a> of the <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> node.</li>
	 * <li>Note 2: You may also link to a <a class="localLink" href="/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="/valueReference">valueReference</a>.</li>
	 * <li>Note 3: Note that you can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.</li>
	 * </ul>
	 * 
	 * @var String $tongueWeight
	 */
	protected $tongueWeight;

	 /**
	 * The permitted weight of a trailer attached to the vehicle.<br><br>
	 * 
	 * Typical unit code(s): KGM for kilogram, LBR for pound
	 * * Note 1: You can indicate additional information in the <a class="localLink" href="/name">name</a> of the <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> node.
	 * * Note 2: You may also link to a <a class="localLink" href="/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="/valueReference">valueReference</a>.
	 * * Note 3: Note that you can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.
	 * @var String $trailerWeight
	 */
	protected $trailerWeight;

	 /**
	 * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
	 * @var String $vehicleConfiguration
	 */
	protected $vehicleConfiguration;

	 /**
	 * Information about the engine or engines of the vehicle.
	 * @var String $vehicleEngine
	 */
	protected $vehicleEngine;

	 /**
	 * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
	 * @var String $vehicleIdentificationNumber
	 */
	protected $vehicleIdentificationNumber;

	 /**
	 * The color or color combination of the interior of the vehicle.
	 * @var String $vehicleInteriorColor
	 */
	protected $vehicleInteriorColor;

	 /**
	 * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.). While most interior types are characterized by the material used, an interior type can also be based on vehicle usage or target audience.
	 * @var String $vehicleInteriorType
	 */
	protected $vehicleInteriorType;

	 /**
	 * The release date of a vehicle model (often used to differentiate versions of the same make and model).
	 * @var String $vehicleModelDate
	 */
	protected $vehicleModelDate;

	 /**
	 * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.<br><br>
	 * 
	 * Typical unit code(s): C62 for persons.
	 * @var String $vehicleSeatingCapacity
	 */
	protected $vehicleSeatingCapacity;

	 /**
	 * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
	 * @var String $vehicleSpecialUsage
	 */
	protected $vehicleSpecialUsage;

	 /**
	 * The type of component used for transmitting the power from a rotating power source to the wheels or other relevant component(s) ("gearbox" for cars).
	 * @var String $vehicleTransmission
	 */
	protected $vehicleTransmission;

	 /**
	 * The permitted total weight of the loaded vehicle, including passengers and cargo and the weight of the empty vehicle.<br><br>
	 * 
	 * Typical unit code(s): KGM for kilogram, LBR for pound<br><br><ul>
	 * <li>Note 1: You can indicate additional information in the <a class="localLink" href="/name">name</a> of the <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> node.</li>
	 * <li>Note 2: You may also link to a <a class="localLink" href="/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="/valueReference">valueReference</a>.</li>
	 * <li>Note 3: Note that you can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.</li>
	 * </ul>
	 * 
	 * @var String $weightTotal
	 */
	protected $weightTotal;

	 /**
	 * The distance between the centers of the front and rear wheels.<br><br>
	 * 
	 * Typical unit code(s): CMT for centimeters, MTR for meters, INH for inches, FOT for foot/feet
	 * @var String $wheelbase
	 */
	protected $wheelbase;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAccelerationTime($x){
		$this->accelerationTime = new Text('accelerationTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBodyType($x){
		$this->bodyType = new Text('bodyType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCallSign($x){
		$this->callSign = new Text('callSign',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCargoVolume($x){
		$this->cargoVolume = new Text('cargoVolume',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateVehicleFirstRegistered($x){
		$this->dateVehicleFirstRegistered = new Text('dateVehicleFirstRegistered',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDriveWheelConfiguration($x){
		$this->driveWheelConfiguration = new Text('driveWheelConfiguration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmissionsCO2($x){
		$this->emissionsCO2 = new Text('emissionsCO2',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFuelCapacity($x){
		$this->fuelCapacity = new Text('fuelCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFuelConsumption($x){
		$this->fuelConsumption = new Text('fuelConsumption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFuelEfficiency($x){
		$this->fuelEfficiency = new Text('fuelEfficiency',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFuelType($x){
		$this->fuelType = new Text('fuelType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKnownVehicleDamages($x){
		$this->knownVehicleDamages = new Text('knownVehicleDamages',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMeetsEmissionStandard($x){
		$this->meetsEmissionStandard = new Text('meetsEmissionStandard',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMileageFromOdometer($x){
		$this->mileageFromOdometer = new Text('mileageFromOdometer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setModelDate($x){
		$this->modelDate = new Text('modelDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfAirbags($x){
		$this->numberOfAirbags = new Text('numberOfAirbags',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfAxles($x){
		$this->numberOfAxles = new Text('numberOfAxles',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfDoors($x){
		$this->numberOfDoors = new Text('numberOfDoors',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfForwardGears($x){
		$this->numberOfForwardGears = new Text('numberOfForwardGears',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfPreviousOwners($x){
		$this->numberOfPreviousOwners = new Text('numberOfPreviousOwners',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPayload($x){
		$this->payload = new Text('payload',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeatingCapacity($x){
		$this->seatingCapacity = new Text('seatingCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpeed($x){
		$this->speed = new Text('speed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSteeringPosition($x){
		$this->steeringPosition = new Text('steeringPosition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTongueWeight($x){
		$this->tongueWeight = new Text('tongueWeight',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTrailerWeight($x){
		$this->trailerWeight = new Text('trailerWeight',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleConfiguration($x){
		$this->vehicleConfiguration = new Text('vehicleConfiguration',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleEngine($x){
		$this->vehicleEngine = new Text('vehicleEngine',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleIdentificationNumber($x){
		$this->vehicleIdentificationNumber = new Text('vehicleIdentificationNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleInteriorColor($x){
		$this->vehicleInteriorColor = new Text('vehicleInteriorColor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleInteriorType($x){
		$this->vehicleInteriorType = new Text('vehicleInteriorType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleModelDate($x){
		$this->vehicleModelDate = new Text('vehicleModelDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleSeatingCapacity($x){
		$this->vehicleSeatingCapacity = new Text('vehicleSeatingCapacity',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleSpecialUsage($x){
		$this->vehicleSpecialUsage = new Text('vehicleSpecialUsage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVehicleTransmission($x){
		$this->vehicleTransmission = new Text('vehicleTransmission',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWeightTotal($x){
		$this->weightTotal = new Text('weightTotal',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWheelbase($x){
		$this->wheelbase = new Text('wheelbase',$x);
		return $this;
	}


}