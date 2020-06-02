<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\TechArticle;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TAPIReference{
	 /**
	 * Associated product/technology version. e.g., .NET Framework 4.5.
	 * @var String $assemblyVersion
	 */
	protected $assemblyVersion;

	 /**
	 * Library file name e.g., mscorlib.dll, system.web.dll. Supersedes <a href="/assembly">assembly</a>.
	 * @var String $executableLibraryName
	 */
	protected $executableLibraryName;

	 /**
	 * Indicates whether API is managed or unmanaged.
	 * @var String $programmingModel
	 */
	protected $programmingModel;

	 /**
	 * Type of app development: phone, Metro style, desktop, XBox, etc.
	 * @var String $targetPlatform
	 */
	protected $targetPlatform;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAssemblyVersion($x){
		$this->assemblyVersion = new Text('AssemblyVersion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setExecutableLibraryName($x){
		$this->executableLibraryName = new Text('ExecutableLibraryName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProgrammingModel($x){
		$this->programmingModel = new Text('ProgrammingModel',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTargetPlatform($x){
		$this->targetPlatform = new Text('TargetPlatform',$x);
		return $this;
	}


}