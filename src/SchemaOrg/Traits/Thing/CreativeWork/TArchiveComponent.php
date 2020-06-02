<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TArchiveComponent{
	 /**
	 * 
	 * <a class="localLink" href="/ArchiveOrganization">ArchiveOrganization</a> that holds, keeps or maintains the <a class="localLink" href="/ArchiveComponent">ArchiveComponent</a>.<br> Inverse property: <a title="Defined in section: pending.schema.org" class="ext ext-pending" href="/archiveHeld">archiveHeld</a>.
	 * @var String $holdingArchive
	 */
	protected $holdingArchive;

	 /**
	 * Current location of the item.
	 * @var String $itemLocation
	 */
	protected $itemLocation;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setHoldingArchive($x){
		$this->holdingArchive = new Text('holdingArchive',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setItemLocation($x){
		$this->itemLocation = new Text('itemLocation',$x);
		return $this;
	}


}