<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TVisualArtwork{
	 /**
	 * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
	 * @var String $artEdition
	 */
	protected $artEdition;

	 /**
	 * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.)
	 * @var String $artMedium
	 */
	protected $artMedium;

	 /**
	 * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
	 * @var String $artform
	 */
	protected $artform;

	 /**
	 * The primary artist for a work
	 *     in a medium other than pencils or digital line art--for example, if the
	 *     primary artwork is done in watercolors or digital paints.
	 * @var String $artist
	 */
	protected $artist;

	 /**
	 * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc. Supersedes <a href="/surface">surface</a>.
	 * @var String $artworkSurface
	 */
	protected $artworkSurface;

	 /**
	 * The individual who adds color to inked drawings.
	 * @var String $colorist
	 */
	protected $colorist;

	 /**
	 * The depth of the item.
	 * @var String $depth
	 */
	protected $depth;

	 /**
	 * The height of the item.
	 * @var String $height
	 */
	protected $height;

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
	 * The width of the item.
	 * @var String $width
	 */
	protected $width;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArtEdition($x){
		$this->artEdition = new Text('artEdition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArtMedium($x){
		$this->artMedium = new Text('artMedium',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArtform($x){
		$this->artform = new Text('artform',$x);
		return $this;
	}

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
	public function setArtworkSurface($x){
		$this->artworkSurface = new Text('artworkSurface',$x);
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
	public function setDepth($x){
		$this->depth = new Text('depth',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHeight($x){
		$this->height = new Text('height',$x);
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
	public function setWidth($x){
		$this->width = new Text('width',$x);
		return $this;
	}


}