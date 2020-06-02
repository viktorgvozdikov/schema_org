<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TDataFeedItem{
	 /**
	 * The date on which the CreativeWork was created or the item was added to a DataFeed.
	 * @var String $dateCreated
	 */
	protected $dateCreated;

	 /**
	 * The datetime the item was removed from the DataFeed.
	 * @var String $dateDeleted
	 */
	protected $dateDeleted;

	 /**
	 * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
	 * @var String $dateModified
	 */
	protected $dateModified;

	 /**
	 * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
	 * @var String $item
	 */
	protected $item;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateCreated($x){
		$this->dateCreated = new Text('DateCreated',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateDeleted($x){
		$this->dateDeleted = new Text('DateDeleted',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateModified($x){
		$this->dateModified = new Text('DateModified',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItem($x){
		$this->item = new Text('Item',$x);
		return $this;
	}


}