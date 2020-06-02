<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TComment{
	 /**
	 * The number of downvotes this question, answer or comment has received from the community.
	 * @var String $downvoteCount
	 */
	protected $downvoteCount;

	 /**
	 * The parent of a question, answer or item in general.
	 * @var String $parentItem
	 */
	protected $parentItem;

	 /**
	 * The number of upvotes this question, answer or comment has received from the community.
	 * @var String $upvoteCount
	 */
	protected $upvoteCount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDownvoteCount($x){
		$this->downvoteCount = new Text('DownvoteCount',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setParentItem($x){
		$this->parentItem = new Text('ParentItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUpvoteCount($x){
		$this->upvoteCount = new Text('UpvoteCount',$x);
		return $this;
	}


}