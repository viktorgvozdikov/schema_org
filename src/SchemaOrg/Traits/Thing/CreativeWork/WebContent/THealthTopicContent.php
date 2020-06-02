<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\WebContent;

use ModuleBZ\SchemaOrg\DataType\Text;
trait THealthTopicContent{
	 /**
	 * Indicates the aspect or aspects specifically addressed in some <a class="localLink" href="/HealthTopicContent">HealthTopicContent</a>. For example, that the content is an overview, or that it talks about treatment, self-care, treatments or their side-effects.
	 * @var String $hasHealthAspect
	 */
	protected $hasHealthAspect;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasHealthAspect($x){
		$this->hasHealthAspect = new Text('HasHealthAspect',$x);
		return $this;
	}


}