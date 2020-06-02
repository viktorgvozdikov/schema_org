<?php

namespace ModuleBZ\SchemaOrg\Traits;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TThing{
	 /**
	 * An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
	 * @var String $additionalType
	 */
	protected $additionalType;

	 /**
	 * An alias for the item.
	 * @var String $alternateName
	 */
	protected $alternateName;

	 /**
	 * A description of the item.
	 * @var String $description
	 */
	protected $description;

	 /**
	 * A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.
	 * @var String $disambiguatingDescription
	 */
	protected $disambiguatingDescription;

	 /**
	 * The identifier property represents any kind of identifier for any kind of <a class="localLink" href="/Thing">Thing</a>, such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See <a href="/docs/datamodel.html#identifierBg">background notes</a> for more details.
	 * @var String $identifier
	 */
	protected $identifier;

	 /**
	 * An image of the item. This can be a <a class="localLink" href="/URL">URL</a> or a fully described <a class="localLink" href="/ImageObject">ImageObject</a>.
	 * @var String $image
	 */
	protected $image;

	 /**
	 * Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See <a href="/docs/datamodel.html#mainEntityBackground">background notes</a> for details.<br> Inverse property: <a href="/mainEntity">mainEntity</a>.
	 * @var String $mainEntityOfPage
	 */
	protected $mainEntityOfPage;

	 /**
	 * The name of the item.
	 * @var String $name
	 */
	protected $name;

	 /**
	 * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
	 * @var String $potentialAction
	 */
	protected $potentialAction;

	 /**
	 * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or official website.
	 * @var String $sameAs
	 */
	protected $sameAs;

	 /**
	 * A CreativeWork or Event about this Thing.<br> Inverse property: <a href="/about">about</a>.
	 * @var String $subjectOf
	 */
	protected $subjectOf;

	 /**
	 * URL of the item.
	 * @var String $url
	 */
	protected $url;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setAdditionalType($x){
		$this->additionalType = new Text('additionalType',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlternateName($x){
		$this->alternateName = new Text('alternateName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDescription($x){
		$this->description = new Text('description',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDisambiguatingDescription($x){
		$this->disambiguatingDescription = new Text('disambiguatingDescription',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIdentifier($x){
		$this->identifier = new Text('identifier',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setImage($x){
		$this->image = new Text('image',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMainEntityOfPage($x){
		$this->mainEntityOfPage = new Text('mainEntityOfPage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setName($x){
		$this->name = new Text('name',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPotentialAction($x){
		$this->potentialAction = new Text('potentialAction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSameAs($x){
		$this->sameAs = new Text('sameAs',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubjectOf($x){
		$this->subjectOf = new Text('subjectOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUrl($x){
		$this->url = new Text('url',$x);
		return $this;
	}


}