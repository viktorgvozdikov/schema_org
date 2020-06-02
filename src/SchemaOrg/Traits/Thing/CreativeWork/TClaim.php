<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TClaim{
	 /**
	 * Indicates an occurence of a <a class="localLink" href="/Claim">Claim</a> in some <a class="localLink" href="/CreativeWork">CreativeWork</a>.
	 * @var String $appearance
	 */
	protected $appearance;

	 /**
	 * Indicates the first known occurence of a <a class="localLink" href="/Claim">Claim</a> in some <a class="localLink" href="/CreativeWork">CreativeWork</a>.
	 * @var String $firstAppearance
	 */
	protected $firstAppearance;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAppearance($x){
		$this->appearance = new Text('Appearance',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFirstAppearance($x){
		$this->firstAppearance = new Text('FirstAppearance',$x);
		return $this;
	}


}