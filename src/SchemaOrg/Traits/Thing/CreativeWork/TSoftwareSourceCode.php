<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSoftwareSourceCode{
	 /**
	 * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
	 * @var String $codeRepository
	 */
	protected $codeRepository;

	 /**
	 * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template. Supersedes <a href="/sampleType">sampleType</a>.
	 * @var String $codeSampleType
	 */
	protected $codeSampleType;

	 /**
	 * The computer programming language.
	 * @var String $programmingLanguage
	 */
	protected $programmingLanguage;

	 /**
	 * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0). Supersedes <a href="/runtime">runtime</a>.
	 * @var String $runtimePlatform
	 */
	protected $runtimePlatform;

	 /**
	 * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
	 * @var String $targetProduct
	 */
	protected $targetProduct;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCodeRepository($x){
		$this->codeRepository = new Text('codeRepository',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCodeSampleType($x){
		$this->codeSampleType = new Text('codeSampleType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProgrammingLanguage($x){
		$this->programmingLanguage = new Text('programmingLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRuntimePlatform($x){
		$this->runtimePlatform = new Text('runtimePlatform',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetProduct($x){
		$this->targetProduct = new Text('targetProduct',$x);
		return $this;
	}


}