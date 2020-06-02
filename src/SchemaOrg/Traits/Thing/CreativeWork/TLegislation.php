<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing\CreativeWork;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TLegislation{
	 /**
	 * Indicates a legal jurisdiction, e.g. of some legislation, or where some government service is based.
	 * @var String $jurisdiction
	 */
	protected $jurisdiction;

	 /**
	 * Indicates that this legislation (or part of a legislation) somehow transfers another legislation in a different legislative context. This is an informative link, and it has no legal value. For legally-binding links of transposition, use the <a href="/legislationTransposes">legislationTransposes</a> property. For example an informative consolidated law of a European Union's member state "applies" the consolidated version of the European Directive implemented in it.
	 * @var String $legislationApplies
	 */
	protected $legislationApplies;

	 /**
	 * Another legislation that this legislation changes. This encompasses the notions of amendment, replacement, correction, repeal, or other types of change. This may be a direct change (textual or non-textual amendment) or a consequential or indirect change. The property is to be used to express the existence of a change relationship between two acts rather than the existence of a consolidated version of the text that shows the result of the change. For consolidation relationships, use the <a href="/legislationConsolidates">legislationConsolidates</a> property.
	 * @var String $legislationChanges
	 */
	protected $legislationChanges;

	 /**
	 * Indicates another legislation taken into account in this consolidated legislation (which is usually the product of an editorial process that revises the legislation). This property should be used multiple times to refer to both the original version or the previous consolidated version, and to the legislations making the change.
	 * @var String $legislationConsolidates
	 */
	protected $legislationConsolidates;

	 /**
	 * The date of adoption or signature of the legislation. This is the date at which the text is officially aknowledged to be a legislation, even though it might not even be published or in force.
	 * @var String $legislationDate
	 */
	protected $legislationDate;

	 /**
	 * The point-in-time at which the provided description of the legislation is valid (e.g. : when looking at the law on the 2016-04-07 (= dateVersion), I get the consolidation of 2015-04-12 of the "National Insurance Contributions Act 2015")
	 * @var String $legislationDateVersion
	 */
	protected $legislationDateVersion;

	 /**
	 * An identifier for the legislation. This can be either a string-based identifier, like the CELEX at EU level or the NOR in France, or a web-based, URL/URI identifier, like an ELI (European Legislation Identifier) or an URN-Lex.
	 * @var String $legislationIdentifier
	 */
	protected $legislationIdentifier;

	 /**
	 * The jurisdiction from which the legislation originates.
	 * @var String $legislationJurisdiction
	 */
	protected $legislationJurisdiction;

	 /**
	 * Whether the legislation is currently in force, not in force, or partially in force.
	 * @var String $legislationLegalForce
	 */
	protected $legislationLegalForce;

	 /**
	 * The person or organization that originally passed or made the law : typically parliament (for primary legislation) or government (for secondary legislation). This indicates the "legal author" of the law, as opposed to its physical author.
	 * @var String $legislationPassedBy
	 */
	protected $legislationPassedBy;

	 /**
	 * An individual or organization that has some kind of responsibility for the legislation. Typically the ministry who is/was in charge of elaborating the legislation, or the adressee for potential questions about the legislation once it is published.
	 * @var String $legislationResponsible
	 */
	protected $legislationResponsible;

	 /**
	 * Indicates that this legislation (or part of legislation) fulfills the objectives set by another legislation, by passing appropriate implementation measures. Typically, some legislations of European Union's member states or regions transpose European Directives. This indicates a legally binding link between the 2 legislations.
	 * @var String $legislationTransposes
	 */
	protected $legislationTransposes;

	 /**
	 * The type of the legislation. Examples of values are "law", "act", "directive", "decree", "regulation", "statutory instrument", "loi organique", "règlement grand-ducal", etc., depending on the country.
	 * @var String $legislationType
	 */
	protected $legislationType;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setJurisdiction($x){
		$this->jurisdiction = new Text('jurisdiction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationApplies($x){
		$this->legislationApplies = new Text('legislationApplies',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationChanges($x){
		$this->legislationChanges = new Text('legislationChanges',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationConsolidates($x){
		$this->legislationConsolidates = new Text('legislationConsolidates',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationDate($x){
		$this->legislationDate = new Text('legislationDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationDateVersion($x){
		$this->legislationDateVersion = new Text('legislationDateVersion',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationIdentifier($x){
		$this->legislationIdentifier = new Text('legislationIdentifier',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationJurisdiction($x){
		$this->legislationJurisdiction = new Text('legislationJurisdiction',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationLegalForce($x){
		$this->legislationLegalForce = new Text('legislationLegalForce',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationPassedBy($x){
		$this->legislationPassedBy = new Text('legislationPassedBy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationResponsible($x){
		$this->legislationResponsible = new Text('legislationResponsible',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationTransposes($x){
		$this->legislationTransposes = new Text('legislationTransposes',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegislationType($x){
		$this->legislationType = new Text('legislationType',$x);
		return $this;
	}


}