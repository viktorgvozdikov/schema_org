<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TBook{
	 /**
	 * Indicates whether the book is an abridged edition.
	 * @var String $abridged
	 */
	protected $abridged;

	 /**
	 * The edition of the book.
	 * @var String $bookEdition
	 */
	protected $bookEdition;

	 /**
	 * The format of the book.
	 * @var String $bookFormat
	 */
	protected $bookFormat;

	 /**
	 * The illustrator of the book.
	 * @var String $illustrator
	 */
	protected $illustrator;

	 /**
	 * The ISBN of the book.
	 * @var String $isbn
	 */
	protected $isbn;

	 /**
	 * The number of pages in the book.
	 * @var String $numberOfPages
	 */
	protected $numberOfPages;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAbridged($x){
		$this->abridged = new Text('abridged',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBookEdition($x){
		$this->bookEdition = new Text('bookEdition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBookFormat($x){
		$this->bookFormat = new Text('bookFormat',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIllustrator($x){
		$this->illustrator = new Text('illustrator',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsbn($x){
		$this->isbn = new Text('isbn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfPages($x){
		$this->numberOfPages = new Text('numberOfPages',$x);
		return $this;
	}


}