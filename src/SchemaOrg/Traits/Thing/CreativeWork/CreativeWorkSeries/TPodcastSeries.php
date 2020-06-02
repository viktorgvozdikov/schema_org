<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\CreativeWorkSeries;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPodcastSeries{
	 /**
	 * The URL for a feed, e.g. associated with a podcast series, blog, or series of date-stamped updates. This is usually RSS or Atom.
	 * @var String $webFeed
	 */
	protected $webFeed;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setWebFeed($x){
		$this->webFeed = new Text('WebFeed',$x);
		return $this;
	}


}