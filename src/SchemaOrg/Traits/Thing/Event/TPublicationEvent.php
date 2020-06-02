<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Event;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TPublicationEvent{
	 /**
	 * An agent associated with the publication event.
	 * @var String $publishedBy
	 */
	protected $publishedBy;

	 /**
	 * A broadcast service associated with the publication event.
	 * @var String $publishedOn
	 */
	protected $publishedOn;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublishedBy($x){
		$this->publishedBy = new Text('PublishedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublishedOn($x){
		$this->publishedOn = new Text('PublishedOn',$x);
		return $this;
	}


}