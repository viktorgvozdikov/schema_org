<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork\Article;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TNewsArticle{
	 /**
	 * A <a href="https://en.wikipedia.org/wiki/Dateline">dateline</a> is a brief piece of text included in news articles that describes where and when the story was written or filed though the date is often omitted. Sometimes only a placename is provided.<br><br>
	 * 
	 * Structured representations of dateline-related information can also be expressed more explicitly using <a class="localLink" href="/locationCreated">locationCreated</a> (which represents where a work was created e.g. where a news report was written).  For location depicted or described in the content, use <a class="localLink" href="/contentLocation">contentLocation</a>.<br><br>
	 * 
	 * Dateline summaries are oriented more towards human readers than towards automated processing, and can vary substantially. Some examples: "BEIRUT, Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
	 * @var String $dateline
	 */
	protected $dateline;

	 /**
	 * The number of the column in which the NewsArticle appears in the print edition.
	 * @var String $printColumn
	 */
	protected $printColumn;

	 /**
	 * The edition of the print product in which the NewsArticle appears.
	 * @var String $printEdition
	 */
	protected $printEdition;

	 /**
	 * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
	 * @var String $printPage
	 */
	protected $printPage;

	 /**
	 * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
	 * @var String $printSection
	 */
	protected $printSection;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setDateline($x){
		$this->dateline = new Text('dateline',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrintColumn($x){
		$this->printColumn = new Text('printColumn',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrintEdition($x){
		$this->printEdition = new Text('printEdition',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrintPage($x){
		$this->printPage = new Text('printPage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrintSection($x){
		$this->printSection = new Text('printSection',$x);
		return $this;
	}


}