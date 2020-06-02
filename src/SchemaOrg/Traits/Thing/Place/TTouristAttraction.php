<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Place;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TTouristAttraction{
	 /**
	 * A language someone may use with or at the item, service or place. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/inLanguage">inLanguage</a>
	 * 
	 * @var String $availableLanguage
	 */
	protected $availableLanguage;

	 /**
	 * Attraction suitable for type(s) of tourist. eg. Children, visitors from a particular country, etc.
	 * @var String $touristType
	 */
	protected $touristType;


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
	public function setTouristType($x){
		$this->touristType = new Text('touristType',$x);
		return $this;
	}


}