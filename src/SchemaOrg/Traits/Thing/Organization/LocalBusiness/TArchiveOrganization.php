<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\Organization\LocalBusiness;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TArchiveOrganization{
	 /**
	 * Collection, <a href="https://en.wikipedia.org/wiki/Fonds">fonds</a>, or item held, kept or maintained by an <a class="localLink" href="/ArchiveOrganization">ArchiveOrganization</a>.<br> Inverse property: <a title="Defined in section: pending.schema.org" class="ext ext-pending" href="/holdingArchive">holdingArchive</a>.
	 * @var String $archiveHeld
	 */
	protected $archiveHeld;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArchiveHeld($x){
		$this->archiveHeld = new Text('archiveHeld',$x);
		return $this;
	}


}