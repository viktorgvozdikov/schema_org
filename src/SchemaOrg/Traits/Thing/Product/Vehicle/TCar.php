<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Product\Vehicle;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TCar{
	 /**
	 * The ACRISS Car Classification Code is a code used by many car rental companies, for classifying vehicles. ACRISS stands for Association of Car Rental Industry Systems and Standards.
	 * @var String $acrissCode
	 */
	protected $acrissCode;

	 /**
	 * The permitted total weight of cargo and installations (e.g. a roof rack) on top of the vehicle.<br><br>
	 * 
	 * Typical unit code(s): KGM for kilogram, LBR for pound<br><br><ul>
	 * <li>Note 1: You can indicate additional information in the <a class="localLink" href="/name">name</a> of the <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> node.</li>
	 * <li>Note 2: You may also link to a <a class="localLink" href="/QualitativeValue">QualitativeValue</a> node that provides additional information using <a class="localLink" href="/valueReference">valueReference</a>
	 * </li>
	 * <li>Note 3: Note that you can use <a class="localLink" href="/minValue">minValue</a> and <a class="localLink" href="/maxValue">maxValue</a> to indicate ranges.</li>
	 * </ul>
	 * 
	 * @var String $roofLoad
	 */
	protected $roofLoad;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAcrissCode($x){
		$this->acrissCode = new Text('acrissCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRoofLoad($x){
		$this->roofLoad = new Text('roofLoad',$x);
		return $this;
	}


}