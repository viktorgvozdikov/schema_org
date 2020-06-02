<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TServiceChannel{
	 /**
	 * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/inLanguage">inLanguage</a>
	 * 
	 * @var String $availableLanguage
	 */
	protected $availableLanguage;

	 /**
	 * Estimated processing time for the service using this channel.
	 * @var String $processingTime
	 */
	protected $processingTime;

	 /**
	 * The service provided by this channel.
	 * @var String $providesService
	 */
	protected $providesService;

	 /**
	 * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
	 * @var String $serviceLocation
	 */
	protected $serviceLocation;

	 /**
	 * The phone number to use to access the service.
	 * @var String $servicePhone
	 */
	protected $servicePhone;

	 /**
	 * The address for accessing the service by mail.
	 * @var String $servicePostalAddress
	 */
	protected $servicePostalAddress;

	 /**
	 * The number to access the service by text message.
	 * @var String $serviceSmsNumber
	 */
	protected $serviceSmsNumber;

	 /**
	 * The website to access the service.
	 * @var String $serviceUrl
	 */
	protected $serviceUrl;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableLanguage($x){
		$this->availableLanguage = new Text('availableLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProcessingTime($x){
		$this->processingTime = new Text('processingTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProvidesService($x){
		$this->providesService = new Text('providesService',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServiceLocation($x){
		$this->serviceLocation = new Text('serviceLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServicePhone($x){
		$this->servicePhone = new Text('servicePhone',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServicePostalAddress($x){
		$this->servicePostalAddress = new Text('servicePostalAddress',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServiceSmsNumber($x){
		$this->serviceSmsNumber = new Text('serviceSmsNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setServiceUrl($x){
		$this->serviceUrl = new Text('serviceUrl',$x);
		return $this;
	}


}