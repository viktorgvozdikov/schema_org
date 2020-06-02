<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPropertyValue{
	 /**
	 * The upper value of some characteristic or property.
	 * @var String $maxValue
	 */
	protected $maxValue;

	 /**
	 * A technique or technology used in a <a class="localLink" href="/Dataset">Dataset</a> (or <a class="localLink" href="/DataDownload">DataDownload</a>, <a class="localLink" href="/DataCatalog">DataCatalog</a>),
	 * corresponding to the method used for measuring the corresponding variable(s) (described using <a class="localLink" href="/variableMeasured">variableMeasured</a>). This is oriented towards scientific and scholarly dataset publication but may have broader applicability; it is not intended as a full representation of measurement, but rather as a high level summary for dataset discovery.<br><br>
	 * 
	 * For example, if <a class="localLink" href="/variableMeasured">variableMeasured</a> is: molecule concentration, <a class="localLink" href="/measurementTechnique">measurementTechnique</a> could be: "mass spectrometry" or "nmr spectroscopy" or "colorimetry" or "immunofluorescence".<br><br>
	 * 
	 * If the <a class="localLink" href="/variableMeasured">variableMeasured</a> is "depression rating", the <a class="localLink" href="/measurementTechnique">measurementTechnique</a> could be "Zung Scale" or "HAM-D" or "Beck Depression Inventory".<br><br>
	 * 
	 * If there are several <a class="localLink" href="/variableMeasured">variableMeasured</a> properties recorded for some given data object, use a <a class="localLink" href="/PropertyValue">PropertyValue</a> for each <a class="localLink" href="/variableMeasured">variableMeasured</a> and attach the corresponding <a class="localLink" href="/measurementTechnique">measurementTechnique</a>.
	 * @var String $measurementTechnique
	 */
	protected $measurementTechnique;

	 /**
	 * The lower value of some characteristic or property.
	 * @var String $minValue
	 */
	protected $minValue;

	 /**
	 * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be
	 * (1) a prefixed string, mainly meant to be used with standards for product properties; (2) a site-specific, non-prefixed string (e.g. the primary key of the property or the vendor-specific id of the property), or (3)
	 * a URL indicating the type of the property, either pointing to an external vocabulary, or a Web resource that describes the property (e.g. a glossary entry).
	 * Standards bodies should promote a standard prefix for the identifiers of properties from their standards.
	 * @var String $propertyID
	 */
	protected $propertyID;

	 /**
	 * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
	 * @var String $unitCode
	 */
	protected $unitCode;

	 /**
	 * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for
	 * <a href="unitCode">unitCode</a>.
	 * @var String $unitText
	 */
	protected $unitText;

	 /**
	 * The value of the quantitative value or property value node.<br><br><ul>
	 * <li>For <a class="localLink" href="/QuantitativeValue">QuantitativeValue</a> and <a class="localLink" href="/MonetaryAmount">MonetaryAmount</a>, the recommended type for values is 'Number'.</li>
	 * <li>For <a class="localLink" href="/PropertyValue">PropertyValue</a>, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.</li>
	 * <li>Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similiar Unicode symbols.</li>
	 * <li>Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.</li>
	 * </ul>
	 * 
	 * @var String $value
	 */
	protected $value;

	 /**
	 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
	 * @var String $valueReference
	 */
	protected $valueReference;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setMaxValue($x){
		$this->maxValue = new Text('maxValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMeasurementTechnique($x){
		$this->measurementTechnique = new Text('measurementTechnique',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMinValue($x){
		$this->minValue = new Text('minValue',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPropertyID($x){
		$this->propertyID = new Text('propertyID',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnitCode($x){
		$this->unitCode = new Text('unitCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnitText($x){
		$this->unitText = new Text('unitText',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValue($x){
		$this->value = new Text('value',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setValueReference($x){
		$this->valueReference = new Text('valueReference',$x);
		return $this;
	}


}