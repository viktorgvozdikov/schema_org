<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TSocialMediaPosting{
	 /**
	 * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
	 * @var String $sharedContent
	 */
	protected $sharedContent;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setSharedContent($x){
		$this->sharedContent = new Text('sharedContent',$x);
		return $this;
	}


}