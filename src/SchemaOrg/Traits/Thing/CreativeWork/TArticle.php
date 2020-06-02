<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TArticle{
	 /**
	 * The actual body of the article.
	 * @var String $articleBody
	 */
	protected $articleBody;

	 /**
	 * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
	 * @var String $articleSection
	 */
	protected $articleSection;

	 /**
	 * For an <a class="localLink" href="/Article">Article</a>, typically a <a class="localLink" href="/NewsArticle">NewsArticle</a>, the backstory property provides a textual summary giving a brief explanation of why and how an article was created. In a journalistic setting this could include information about reporting process, methods, interviews, data sources, etc.
	 * @var String $backstory
	 */
	protected $backstory;

	 /**
	 * The page on which the work ends; for example "138" or "xvi".
	 * @var String $pageEnd
	 */
	protected $pageEnd;

	 /**
	 * The page on which the work starts; for example "135" or "xiii".
	 * @var String $pageStart
	 */
	protected $pageStart;

	 /**
	 * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
	 * @var String $pagination
	 */
	protected $pagination;

	 /**
	 * Indicates sections of a Web page that are particularly 'speakable' in the sense of being highlighted as being especially appropriate for text-to-speech conversion. Other sections of a page may also be usefully spoken in particular circumstances; the 'speakable' property serves to indicate the parts most likely to be generally useful for speech.<br><br>
	 * 
	 * The <em>speakable</em> property can be repeated an arbitrary number of times, with three kinds of possible 'content-locator' values:<br><br>
	 * 
	 * 1.) <em>id-value</em> URL references - uses <em>id-value</em> of an element in the page being annotated. The simplest use of <em>speakable</em> has (potentially relative) URL values, referencing identified sections of the document concerned.<br><br>
	 * 
	 * 2.) CSS Selectors - addresses content in the annotated page, eg. via class attribute. Use the <a class="localLink" href="/cssSelector">cssSelector</a> property.<br><br>
	 * 
	 * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the content). Use the <a class="localLink" href="/xpath">xpath</a> property.<br><br>
	 * 
	 * For more sophisticated markup of speakable sections beyond simple ID references, either CSS selectors or XPath expressions to pick out document section(s) as speakable. For this
	 * we define a supporting type, <a class="localLink" href="/SpeakableSpecification">SpeakableSpecification</a>  which is defined to be a possible value of the <em>speakable</em> property.
	 * @var String $speakable
	 */
	protected $speakable;

	 /**
	 * The number of words in the text of the Article.
	 * @var String $wordCount
	 */
	protected $wordCount;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setArticleBody($x){
		$this->articleBody = new Text('ArticleBody',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setArticleSection($x){
		$this->articleSection = new Text('ArticleSection',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBackstory($x){
		$this->backstory = new Text('Backstory',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPageEnd($x){
		$this->pageEnd = new Text('PageEnd',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPageStart($x){
		$this->pageStart = new Text('PageStart',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPagination($x){
		$this->pagination = new Text('Pagination',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpeakable($x){
		$this->speakable = new Text('Speakable',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setWordCount($x){
		$this->wordCount = new Text('WordCount',$x);
		return $this;
	}


}