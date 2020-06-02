<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Action\CreateAction;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWriteAction{
	 /**
	 * The language of the content or performance or used in an action. Please use one of the language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>. See also <a class="localLink" href="/availableLanguage">availableLanguage</a>. Supersedes <a href="/language">language</a>.
	 * @var String $inLanguage
	 */
	protected $inLanguage;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setInLanguage($x){
		$this->inLanguage = new Text('inLanguage',$x);
		return $this;
	}


}