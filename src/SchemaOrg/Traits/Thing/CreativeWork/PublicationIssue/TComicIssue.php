<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\PublicationIssue;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TComicIssue{
	 /**
	 * The primary artist for a work
	 *     in a medium other than pencils or digital line art--for example, if the
	 *     primary artwork is done in watercolors or digital paints.
	 * @var String $artist
	 */
	protected $artist;

	 /**
	 * The individual who adds color to inked drawings.
	 * @var String $colorist
	 */
	protected $colorist;

	 /**
	 * The individual who traces over the pencil drawings in ink after pencils are complete.
	 * @var String $inker
	 */
	protected $inker;

	 /**
	 * The individual who adds lettering, including speech balloons and sound effects, to artwork.
	 * @var String $letterer
	 */
	protected $letterer;

	 /**
	 * The individual who draws the primary narrative artwork.
	 * @var String $penciler
	 */
	protected $penciler;

	 /**
	 * A description of the variant cover
	 *     for the issue, if the issue is a variant printing. For example, "Bryan Hitch
	 *     Variant Cover" or "2nd Printing Variant".
	 * @var String $variantCover
	 */
	protected $variantCover;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArtist($x){
		$this->artist = new Text('artist',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setColorist($x){
		$this->colorist = new Text('colorist',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInker($x){
		$this->inker = new Text('inker',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLetterer($x){
		$this->letterer = new Text('letterer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPenciler($x){
		$this->penciler = new Text('penciler',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVariantCover($x){
		$this->variantCover = new Text('variantCover',$x);
		return $this;
	}


}