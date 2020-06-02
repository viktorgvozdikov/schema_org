<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCDCPMDRecord{
	 /**
	 * collectiondate - Date for which patient counts are reported.
	 * @var String $cvdCollectionDate
	 */
	protected $cvdCollectionDate;

	 /**
	 * Name of the County of the NHSN facility that this data record applies to. Use <a class="localLink" href="/cvdFacilityId">cvdFacilityId</a> to identify the facility. To provide other details, <a class="localLink" href="/healthcareReportingData">healthcareReportingData</a> can be used on a <a class="localLink" href="/Hospital">Hospital</a> entry.
	 * @var String $cvdFacilityCounty
	 */
	protected $cvdFacilityCounty;

	 /**
	 * Identifier of the NHSN facility that this data record applies to. Use <a class="localLink" href="/cvdFacilityCounty">cvdFacilityCounty</a> to indicate the county. To provide other details, <a class="localLink" href="/healthcareReportingData">healthcareReportingData</a> can be used on a <a class="localLink" href="/Hospital">Hospital</a> entry.
	 * @var String $cvdFacilityId
	 */
	protected $cvdFacilityId;

	 /**
	 * numbeds - HOSPITAL INPATIENT BEDS: Inpatient beds, including all staffed, licensed, and overflow (surge) beds used for inpatients.
	 * @var String $cvdNumBeds
	 */
	protected $cvdNumBeds;

	 /**
	 * numbedsocc - HOSPITAL INPATIENT BED OCCUPANCY: Total number of staffed inpatient beds that are occupied.
	 * @var String $cvdNumBedsOcc
	 */
	protected $cvdNumBedsOcc;

	 /**
	 * numc19died - DEATHS: Patients with suspected or confirmed COVID-19 who died in the hospital, ED, or any overflow location.
	 * @var String $cvdNumC19Died
	 */
	protected $cvdNumC19Died;

	 /**
	 * numc19hopats - HOSPITAL ONSET: Patients hospitalized in an NHSN inpatient care location with onset of suspected or confirmed COVID-19 14 or more days after hospitalization.
	 * @var String $cvdNumC19HOPats
	 */
	protected $cvdNumC19HOPats;

	 /**
	 * numc19hosppats - HOSPITALIZED: Patients currently hospitalized in an inpatient care location who have suspected or confirmed COVID-19.
	 * @var String $cvdNumC19HospPats
	 */
	protected $cvdNumC19HospPats;

	 /**
	 * numc19mechventpats - HOSPITALIZED and VENTILATED: Patients hospitalized in an NHSN inpatient care location who have suspected or confirmed COVID-19 and are on a mechanical ventilator.
	 * @var String $cvdNumC19MechVentPats
	 */
	protected $cvdNumC19MechVentPats;

	 /**
	 * numc19ofmechventpats - ED/OVERFLOW and VENTILATED: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed and on a mechanical ventilator.
	 * @var String $cvdNumC19OFMechVentPats
	 */
	protected $cvdNumC19OFMechVentPats;

	 /**
	 * numc19overflowpats - ED/OVERFLOW: Patients with suspected or confirmed COVID-19 who are in the ED or any overflow location awaiting an inpatient bed.
	 * @var String $cvdNumC19OverflowPats
	 */
	protected $cvdNumC19OverflowPats;

	 /**
	 * numicubeds - ICU BEDS: Total number of staffed inpatient intensive care unit (ICU) beds.
	 * @var String $cvdNumICUBeds
	 */
	protected $cvdNumICUBeds;

	 /**
	 * numicubedsocc - ICU BED OCCUPANCY: Total number of staffed inpatient ICU beds that are occupied.
	 * @var String $cvdNumICUBedsOcc
	 */
	protected $cvdNumICUBedsOcc;

	 /**
	 * numtotbeds - ALL HOSPITAL BEDS: Total number of all Inpatient and outpatient beds, including all staffed,ICU, licensed, and overflow (surge) beds used for inpatients or outpatients.
	 * @var String $cvdNumTotBeds
	 */
	protected $cvdNumTotBeds;

	 /**
	 * numvent - MECHANICAL VENTILATORS: Total number of ventilators available.
	 * @var String $cvdNumVent
	 */
	protected $cvdNumVent;

	 /**
	 * numventuse - MECHANICAL VENTILATORS IN USE: Total number of ventilators in use.
	 * @var String $cvdNumVentUse
	 */
	protected $cvdNumVentUse;

	 /**
	 * Publication date of an online listing.
	 * @var String $datePosted
	 */
	protected $datePosted;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdCollectionDate($x){
		$this->cvdCollectionDate = new Text('cvdCollectionDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdFacilityCounty($x){
		$this->cvdFacilityCounty = new Text('cvdFacilityCounty',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdFacilityId($x){
		$this->cvdFacilityId = new Text('cvdFacilityId',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumBeds($x){
		$this->cvdNumBeds = new Text('cvdNumBeds',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumBedsOcc($x){
		$this->cvdNumBedsOcc = new Text('cvdNumBedsOcc',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumC19Died($x){
		$this->cvdNumC19Died = new Text('cvdNumC19Died',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumC19HOPats($x){
		$this->cvdNumC19HOPats = new Text('cvdNumC19HOPats',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumC19HospPats($x){
		$this->cvdNumC19HospPats = new Text('cvdNumC19HospPats',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumC19MechVentPats($x){
		$this->cvdNumC19MechVentPats = new Text('cvdNumC19MechVentPats',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumC19OFMechVentPats($x){
		$this->cvdNumC19OFMechVentPats = new Text('cvdNumC19OFMechVentPats',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumC19OverflowPats($x){
		$this->cvdNumC19OverflowPats = new Text('cvdNumC19OverflowPats',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumICUBeds($x){
		$this->cvdNumICUBeds = new Text('cvdNumICUBeds',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumICUBedsOcc($x){
		$this->cvdNumICUBedsOcc = new Text('cvdNumICUBedsOcc',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumTotBeds($x){
		$this->cvdNumTotBeds = new Text('cvdNumTotBeds',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumVent($x){
		$this->cvdNumVent = new Text('cvdNumVent',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCvdNumVentUse($x){
		$this->cvdNumVentUse = new Text('cvdNumVentUse',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDatePosted($x){
		$this->datePosted = new Text('datePosted',$x);
		return $this;
	}


}