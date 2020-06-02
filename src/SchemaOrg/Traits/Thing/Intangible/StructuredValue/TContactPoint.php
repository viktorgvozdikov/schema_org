<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\StructuredValue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TContactPoint{
	 /**
	 * The geographic area where a service or offered item is provided. Supersedes <a href="/serviceArea">serviceArea</a>.
	 * @var String $areaServed
	 */
	protected $areaServed;

	 /**
	 * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/inLanguage">inLanguage</a>
	 * 
	 * @var String $availableLanguage
	 */
	protected $availableLanguage;

	 /**
	 * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
	 * @var String $contactOption
	 */
	protected $contactOption;

	 /**
	 * A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.
	 * @var String $contactType
	 */
	protected $contactType;

	 /**
	 * Email address.
	 * @var String $email
	 */
	protected $email;

	 /**
	 * The fax number.
	 * @var String $faxNumber
	 */
	protected $faxNumber;

	 /**
	 * The hours during which this service or contact is available.
	 * @var String $hoursAvailable
	 */
	protected $hoursAvailable;

	 /**
	 * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
	 * @var String $productSupported
	 */
	protected $productSupported;

	 /**
	 * The telephone number.
	 * @var String $telephone
	 */
	protected $telephone;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAreaServed($x){
		$this->areaServed = new Text('AreaServed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAvailableLanguage($x){
		$this->availableLanguage = new Text('AvailableLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContactOption($x){
		$this->contactOption = new Text('ContactOption',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContactType($x){
		$this->contactType = new Text('ContactType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmail($x){
		$this->email = new Text('Email',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFaxNumber($x){
		$this->faxNumber = new Text('FaxNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHoursAvailable($x){
		$this->hoursAvailable = new Text('HoursAvailable',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setProductSupported($x){
		$this->productSupported = new Text('ProductSupported',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTelephone($x){
		$this->telephone = new Text('Telephone',$x);
		return $this;
	}


}