<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDataset{
	 /**
	 * A downloadable form of this dataset, at a specific location, in a specific format.
	 * @var String $distribution
	 */
	protected $distribution;

	 /**
	 * A data catalog which contains this dataset. Supersedes <a href="/catalog">catalog</a>, <a href="/includedDataCatalog">includedDataCatalog</a>.<br> Inverse property: <a href="/dataset">dataset</a>.
	 * @var String $includedInDataCatalog
	 */
	protected $includedInDataCatalog;

	 /**
	 * The International Standard Serial Number (ISSN) that identifies this serial publication. You can repeat this property to identify different formats of, or the linking ISSN (ISSN-L) for, this serial publication.
	 * @var String $issn
	 */
	protected $issn;

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
	 * The variableMeasured property can indicate (repeated as necessary) the  variables that are measured in some dataset, either described as text or as pairs of identifier and description using PropertyValue.
	 * @var String $variableMeasured
	 */
	protected $variableMeasured;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDistribution($x){
		$this->distribution = new Text('Distribution',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIncludedInDataCatalog($x){
		$this->includedInDataCatalog = new Text('IncludedInDataCatalog',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIssn($x){
		$this->issn = new Text('Issn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMeasurementTechnique($x){
		$this->measurementTechnique = new Text('MeasurementTechnique',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVariableMeasured($x){
		$this->variableMeasured = new Text('VariableMeasured',$x);
		return $this;
	}


}