<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible\Role;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLinkRole{
	 /**
	 * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/availableLanguage">availableLanguage</a>. Supersedes <a href="/language">language</a>.
	 * @var String $inLanguage
	 */
	protected $inLanguage;

	 /**
	 * Indicates the relationship type of a Web link.
	 * @var String $linkRelationship
	 */
	protected $linkRelationship;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInLanguage($x){
		$this->inLanguage = new Text('InLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLinkRelationship($x){
		$this->linkRelationship = new Text('LinkRelationship',$x);
		return $this;
	}


}