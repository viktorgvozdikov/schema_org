<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Intangible;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TListItem{
	 /**
	 * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
	 * @var String $item
	 */
	protected $item;

	 /**
	 * A link to the ListItem that follows the current one.
	 * @var String $nextItem
	 */
	protected $nextItem;

	 /**
	 * The position of an item in a series or sequence of items.
	 * @var String $position
	 */
	protected $position;

	 /**
	 * A link to the ListItem that preceeds the current one.
	 * @var String $previousItem
	 */
	protected $previousItem;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setItem($x){
		$this->item = new Text('Item',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNextItem($x){
		$this->nextItem = new Text('NextItem',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPosition($x){
		$this->position = new Text('Position',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPreviousItem($x){
		$this->previousItem = new Text('PreviousItem',$x);
		return $this;
	}


}