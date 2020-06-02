<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TWebPage{
	 /**
	 * A set of links that can help a user understand and navigate a website hierarchy.
	 * @var String $breadcrumb
	 */
	protected $breadcrumb;

	 /**
	 * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
	 * @var String $lastReviewed
	 */
	protected $lastReviewed;

	 /**
	 * Indicates if this web page element is the main subject of the page. Supersedes <a href="/aspect">aspect</a>.
	 * @var String $mainContentOfPage
	 */
	protected $mainContentOfPage;

	 /**
	 * Indicates the main image on the page.
	 * @var String $primaryImageOfPage
	 */
	protected $primaryImageOfPage;

	 /**
	 * A link related to this web page, for example to other related web pages.
	 * @var String $relatedLink
	 */
	protected $relatedLink;

	 /**
	 * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
	 * @var String $reviewedBy
	 */
	protected $reviewedBy;

	 /**
	 * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most. Supersedes <a href="/significantLinks">significantLinks</a>.
	 * @var String $significantLink
	 */
	protected $significantLink;

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
	 * One of the domain specialities to which this web page's content applies.
	 * @var String $specialty
	 */
	protected $specialty;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setBreadcrumb($x){
		$this->breadcrumb = new Text('breadcrumb',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLastReviewed($x){
		$this->lastReviewed = new Text('lastReviewed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMainContentOfPage($x){
		$this->mainContentOfPage = new Text('mainContentOfPage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPrimaryImageOfPage($x){
		$this->primaryImageOfPage = new Text('primaryImageOfPage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setRelatedLink($x){
		$this->relatedLink = new Text('relatedLink',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReviewedBy($x){
		$this->reviewedBy = new Text('reviewedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSignificantLink($x){
		$this->significantLink = new Text('significantLink',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpeakable($x){
		$this->speakable = new Text('speakable',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSpecialty($x){
		$this->specialty = new Text('specialty',$x);
		return $this;
	}


}