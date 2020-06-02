<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWebPageElement{
	 /**
	 * A CSS selector, e.g. of a <a class="localLink" href="/SpeakableSpecification">SpeakableSpecification</a> or <a class="localLink" href="/WebPageElement">WebPageElement</a>. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
	 * @var String $cssSelector
	 */
	protected $cssSelector;

	 /**
	 * An XPath, e.g. of a <a class="localLink" href="/SpeakableSpecification">SpeakableSpecification</a> or <a class="localLink" href="/WebPageElement">WebPageElement</a>. In the latter case, multiple matches within a page can constitute a single conceptual "Web page element".
	 * @var String $xpath
	 */
	protected $xpath;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCssSelector($x){
		$this->cssSelector = new Text('CssSelector',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setXpath($x){
		$this->xpath = new Text('Xpath',$x);
		return $this;
	}


}