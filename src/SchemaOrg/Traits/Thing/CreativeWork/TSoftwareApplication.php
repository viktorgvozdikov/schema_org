<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSoftwareApplication{
	 /**
	 * Type of software application, e.g. 'Game, Multimedia'.
	 * @var String $applicationCategory
	 */
	protected $applicationCategory;

	 /**
	 * Subcategory of the application, e.g. 'Arcade Game'.
	 * @var String $applicationSubCategory
	 */
	protected $applicationSubCategory;

	 /**
	 * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
	 * @var String $applicationSuite
	 */
	protected $applicationSuite;

	 /**
	 * Device required to run the application. Used in cases where a specific make/model is required to run the application. Supersedes <a href="/device">device</a>.
	 * @var String $availableOnDevice
	 */
	protected $availableOnDevice;

	 /**
	 * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * @var String $countriesNotSupported
	 */
	protected $countriesNotSupported;

	 /**
	 * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * @var String $countriesSupported
	 */
	protected $countriesSupported;

	 /**
	 * If the file can be downloaded, URL to download the binary.
	 * @var String $downloadUrl
	 */
	protected $downloadUrl;

	 /**
	 * Features or modules provided by this application (and possibly required by other applications).
	 * @var String $featureList
	 */
	protected $featureList;

	 /**
	 * Size of the application / package (e.g. 18MB). In the absence of a unit (MB, KB etc.), KB will be assumed.
	 * @var String $fileSize
	 */
	protected $fileSize;

	 /**
	 * URL at which the app may be installed, if different from the URL of the item.
	 * @var String $installUrl
	 */
	protected $installUrl;

	 /**
	 * Minimum memory requirements.
	 * @var String $memoryRequirements
	 */
	protected $memoryRequirements;

	 /**
	 * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
	 * @var String $operatingSystem
	 */
	protected $operatingSystem;

	 /**
	 * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
	 * @var String $permissions
	 */
	protected $permissions;

	 /**
	 * Processor architecture required to run the application (e.g. IA64).
	 * @var String $processorRequirements
	 */
	protected $processorRequirements;

	 /**
	 * Description of what changed in this version.
	 * @var String $releaseNotes
	 */
	protected $releaseNotes;

	 /**
	 * A link to a screenshot image of the app.
	 * @var String $screenshot
	 */
	protected $screenshot;

	 /**
	 * Additional content for a software application.
	 * @var String $softwareAddOn
	 */
	protected $softwareAddOn;

	 /**
	 * Software application help.
	 * @var String $softwareHelp
	 */
	protected $softwareHelp;

	 /**
	 * Component dependency requirements for application. This includes runtime environments and shared libraries that are not included in the application distribution package, but required to run the application (Examples: DirectX, Java or .NET runtime). Supersedes <a href="/requirements">requirements</a>.
	 * @var String $softwareRequirements
	 */
	protected $softwareRequirements;

	 /**
	 * Version of the software instance.
	 * @var String $softwareVersion
	 */
	protected $softwareVersion;

	 /**
	 * Storage requirements (free space required).
	 * @var String $storageRequirements
	 */
	protected $storageRequirements;

	 /**
	 * Supporting data for a SoftwareApplication.
	 * @var String $supportingData
	 */
	protected $supportingData;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicationCategory($x){
		$this->applicationCategory = new Text('ApplicationCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicationSubCategory($x){
		$this->applicationSubCategory = new Text('ApplicationSubCategory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setApplicationSuite($x){
		$this->applicationSuite = new Text('ApplicationSuite',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableOnDevice($x){
		$this->availableOnDevice = new Text('AvailableOnDevice',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCountriesNotSupported($x){
		$this->countriesNotSupported = new Text('CountriesNotSupported',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCountriesSupported($x){
		$this->countriesSupported = new Text('CountriesSupported',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDownloadUrl($x){
		$this->downloadUrl = new Text('DownloadUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFeatureList($x){
		$this->featureList = new Text('FeatureList',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFileSize($x){
		$this->fileSize = new Text('FileSize',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInstallUrl($x){
		$this->installUrl = new Text('InstallUrl',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMemoryRequirements($x){
		$this->memoryRequirements = new Text('MemoryRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOperatingSystem($x){
		$this->operatingSystem = new Text('OperatingSystem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPermissions($x){
		$this->permissions = new Text('Permissions',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProcessorRequirements($x){
		$this->processorRequirements = new Text('ProcessorRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReleaseNotes($x){
		$this->releaseNotes = new Text('ReleaseNotes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setScreenshot($x){
		$this->screenshot = new Text('Screenshot',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSoftwareAddOn($x){
		$this->softwareAddOn = new Text('SoftwareAddOn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSoftwareHelp($x){
		$this->softwareHelp = new Text('SoftwareHelp',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSoftwareRequirements($x){
		$this->softwareRequirements = new Text('SoftwareRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSoftwareVersion($x){
		$this->softwareVersion = new Text('SoftwareVersion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setStorageRequirements($x){
		$this->storageRequirements = new Text('StorageRequirements',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSupportingData($x){
		$this->supportingData = new Text('SupportingData',$x);
		return $this;
	}


}