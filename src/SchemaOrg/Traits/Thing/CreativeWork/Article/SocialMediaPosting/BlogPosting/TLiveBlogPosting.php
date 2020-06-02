<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLiveBlogPosting{
	 /**
	 * The time when the live blog will stop covering the Event. Note that coverage may continue after the Event concludes.
	 * @var String $coverageEndTime
	 */
	protected $coverageEndTime;

	 /**
	 * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
	 * @var String $coverageStartTime
	 */
	protected $coverageStartTime;

	 /**
	 * An update to the LiveBlog.
	 * @var String $liveBlogUpdate
	 */
	protected $liveBlogUpdate;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setCoverageEndTime($x){
		$this->coverageEndTime = new Text('coverageEndTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCoverageStartTime($x){
		$this->coverageStartTime = new Text('coverageStartTime',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLiveBlogUpdate($x){
		$this->liveBlogUpdate = new Text('liveBlogUpdate',$x);
		return $this;
	}


}