<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\ScholarlyArticle;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TMedicalScholarlyArticle{
	 /**
	 * The type of the medical article, taken from the US NLM MeSH publication type catalog. See also <a href="http://www.nlm.nih.gov/mesh/pubtypes.html">MeSH documentation</a>.
	 * @var String $publicationType
	 */
	protected $publicationType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublicationType($x){
		$this->publicationType = new Text('publicationType',$x);
		return $this;
	}


}