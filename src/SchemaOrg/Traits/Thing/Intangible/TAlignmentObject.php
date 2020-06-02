<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAlignmentObject{
	 /**
	 * A category of alignment between the learning resource and the framework node. Recommended values include: 'requires', 'textComplexity', 'readingLevel', and 'educationalSubject'.
	 * @var String $alignmentType
	 */
	protected $alignmentType;

	 /**
	 * The framework to which the resource being described is aligned.
	 * @var String $educationalFramework
	 */
	protected $educationalFramework;

	 /**
	 * The description of a node in an established educational framework.
	 * @var String $targetDescription
	 */
	protected $targetDescription;

	 /**
	 * The name of a node in an established educational framework.
	 * @var String $targetName
	 */
	protected $targetName;

	 /**
	 * The URL of a node in an established educational framework.
	 * @var String $targetUrl
	 */
	protected $targetUrl;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlignmentType($x){
		$this->alignmentType = new Text('AlignmentType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEducationalFramework($x){
		$this->educationalFramework = new Text('EducationalFramework',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetDescription($x){
		$this->targetDescription = new Text('TargetDescription',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetName($x){
		$this->targetName = new Text('TargetName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetUrl($x){
		$this->targetUrl = new Text('TargetUrl',$x);
		return $this;
	}


}