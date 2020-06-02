<?php

namespace ModuleBZ\SchemaOrg\Traits\Thing;

use ModuleBZ\SchemaOrg\DataType\Text;
trait TOrganization{
	 /**
	 * For a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a> or other news-related <a class="localLink" href="/Organization">Organization</a>, a statement about public engagement activities (for news media, the newsroom’s), including involving the public - digitally or otherwise -- in coverage decisions, reporting and activities after publication.
	 * @var String $actionableFeedbackPolicy
	 */
	protected $actionableFeedbackPolicy;

	 /**
	 * Physical address of the item.
	 * @var String $address
	 */
	protected $address;

	 /**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @var String $aggregateRating
	 */
	protected $aggregateRating;

	 /**
	 * Alumni of an organization.<br> Inverse property: <a href="/alumniOf">alumniOf</a>.
	 * @var String $alumni
	 */
	protected $alumni;

	 /**
	 * The geographic area where a service or offered item is provided. Supersedes <a href="/serviceArea">serviceArea</a>.
	 * @var String $areaServed
	 */
	protected $areaServed;

	 /**
	 * An award won by or for this item. Supersedes <a href="/awards">awards</a>.
	 * @var String $award
	 */
	protected $award;

	 /**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization or business person.
	 * @var String $brand
	 */
	protected $brand;

	 /**
	 * A contact point for a person or organization. Supersedes <a href="/contactPoints">contactPoints</a>.
	 * @var String $contactPoint
	 */
	protected $contactPoint;

	 /**
	 * For an <a class="localLink" href="/Organization">Organization</a> (e.g. <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>), a statement describing (in news media, the newsroom’s) disclosure and correction policy for errors.
	 * @var String $correctionsPolicy
	 */
	protected $correctionsPolicy;

	 /**
	 * A relationship between an organization and a department of that organization, also described as an organization (allowing different urls, logos, opening hours). For example: a store with a pharmacy, or a bakery with a cafe.
	 * @var String $department
	 */
	protected $department;

	 /**
	 * The date that this organization was dissolved.
	 * @var String $dissolutionDate
	 */
	protected $dissolutionDate;

	 /**
	 * Statement on diversity policy by an <a class="localLink" href="/Organization">Organization</a> e.g. a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>. For a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>, a statement describing the newsroom’s diversity policy on both staffing and sources, typically providing staffing data.
	 * @var String $diversityPolicy
	 */
	protected $diversityPolicy;

	 /**
	 * For an <a class="localLink" href="/Organization">Organization</a> (often but not necessarily a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>), a report on staffing diversity issues. In a news context this might be for example ASNE or RTDNA (US) reports, or self-reported.
	 * @var String $diversityStaffingReport
	 */
	protected $diversityStaffingReport;

	 /**
	 * The Dun &amp; Bradstreet DUNS number for identifying an organization or business person.
	 * @var String $duns
	 */
	protected $duns;

	 /**
	 * Email address.
	 * @var String $email
	 */
	protected $email;

	 /**
	 * Someone working for this organization. Supersedes <a href="/employees">employees</a>.
	 * @var String $employee
	 */
	protected $employee;

	 /**
	 * Statement about ethics policy, e.g. of a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a> regarding journalistic and publishing practices, or of a <a class="localLink" href="/Restaurant">Restaurant</a>, a page describing food source policies. In the case of a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>, an ethicsPolicy is typically a statement describing the personal, organizational, and corporate standards of behavior expected by the organization.
	 * @var String $ethicsPolicy
	 */
	protected $ethicsPolicy;

	 /**
	 * Upcoming or past event associated with this place, organization, or action. Supersedes <a href="/events">events</a>.
	 * @var String $event
	 */
	protected $event;

	 /**
	 * The fax number.
	 * @var String $faxNumber
	 */
	protected $faxNumber;

	 /**
	 * A person who founded this organization. Supersedes <a href="/founders">founders</a>.
	 * @var String $founder
	 */
	protected $founder;

	 /**
	 * The date that this organization was founded.
	 * @var String $foundingDate
	 */
	protected $foundingDate;

	 /**
	 * The place where the Organization was founded.
	 * @var String $foundingLocation
	 */
	protected $foundingLocation;

	 /**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @var String $funder
	 */
	protected $funder;

	 /**
	 * The <a href="http://www.gs1.org/gln">Global Location Number</a> (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.
	 * @var String $globalLocationNumber
	 */
	protected $globalLocationNumber;

	 /**
	 * A credential awarded to the Person or Organization.
	 * @var String $hasCredential
	 */
	protected $hasCredential;

	 /**
	 * Indicates a MerchantReturnPolicy that may be applicable. Supersedes <a title="Defined in section: attic.schema.org" class="ext ext-attic" href="/hasProductReturnPolicy">hasProductReturnPolicy</a>.
	 * @var String $hasMerchantReturnPolicy
	 */
	protected $hasMerchantReturnPolicy;

	 /**
	 * Indicates an OfferCatalog listing for this Organization, Person, or Service.
	 * @var String $hasOfferCatalog
	 */
	protected $hasOfferCatalog;

	 /**
	 * Points-of-Sales operated by the organization or person.
	 * @var String $hasPOS
	 */
	protected $hasPOS;

	 /**
	 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication. The most specific child type of InteractionCounter should be used. Supersedes <a href="/interactionCount">interactionCount</a>.
	 * @var String $interactionStatistic
	 */
	protected $interactionStatistic;

	 /**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.
	 * @var String $isicV4
	 */
	protected $isicV4;

	 /**
	 * Of a <a class="localLink" href="/Person">Person</a>, and less typically of an <a class="localLink" href="/Organization">Organization</a>, to indicate a topic that is known about - suggesting possible expertise but not implying it. We do not distinguish skill levels here, or relate this to educational content, events, objectives or <a class="localLink" href="/JobPosting">JobPosting</a> descriptions.
	 * @var String $knowsAbout
	 */
	protected $knowsAbout;

	 /**
	 * Of a <a class="localLink" href="/Person">Person</a>, and less typically of an <a class="localLink" href="/Organization">Organization</a>, to indicate a known language. We do not distinguish skill levels or reading/writing/speaking/signing here. Use language codes from the <a href="http://tools.ietf.org/html/bcp47">IETF BCP 47 standard</a>.
	 * @var String $knowsLanguage
	 */
	protected $knowsLanguage;

	 /**
	 * The official name of the organization, e.g. the registered company name.
	 * @var String $legalName
	 */
	protected $legalName;

	 /**
	 * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
	 * @var String $leiCode
	 */
	protected $leiCode;

	 /**
	 * The location of for example where the event is happening, an organization is located, or where an action takes place.
	 * @var String $location
	 */
	protected $location;

	 /**
	 * An associated logo.
	 * @var String $logo
	 */
	protected $logo;

	 /**
	 * A pointer to products or services offered by the organization or person.<br> Inverse property: <a href="/offeredBy">offeredBy</a>.
	 * @var String $makesOffer
	 */
	protected $makesOffer;

	 /**
	 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals. Supersedes <a href="/members">members</a>, <a href="/musicGroupMember">musicGroupMember</a>.<br> Inverse property: <a href="/memberOf">memberOf</a>.
	 * @var String $member
	 */
	protected $member;

	 /**
	 * An Organization (or ProgramMembership) to which this Person or Organization belongs.<br> Inverse property: <a href="/member">member</a>.
	 * @var String $memberOf
	 */
	protected $memberOf;

	 /**
	 * The North American Industry Classification System (NAICS) code for a particular organization or business person.
	 * @var String $naics
	 */
	protected $naics;

	 /**
	 * nonprofit Status indicates the legal status of a non-profit organization in its primary place of business.
	 * @var String $nonprofitStatus
	 */
	protected $nonprofitStatus;

	 /**
	 * The number of employees in an organization e.g. business.
	 * @var String $numberOfEmployees
	 */
	protected $numberOfEmployees;

	 /**
	 * For an <a class="localLink" href="/Organization">Organization</a> (often but not necessarily a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>), a description of organizational ownership structure; funding and grants. In a news/media setting, this is with particular reference to editorial independence.   Note that the <a class="localLink" href="/funder">funder</a> is also available and can be used to make basic funder information machine-readable.
	 * @var String $ownershipFundingInfo
	 */
	protected $ownershipFundingInfo;

	 /**
	 * Products owned by the organization or person.
	 * @var String $owns
	 */
	protected $owns;

	 /**
	 * The larger organization that this organization is a <a class="localLink" href="/subOrganization">subOrganization</a> of, if any. Supersedes <a href="/branchOf">branchOf</a>.<br> Inverse property: <a href="/subOrganization">subOrganization</a>.
	 * @var String $parentOrganization
	 */
	protected $parentOrganization;

	 /**
	 * The publishingPrinciples property indicates (typically via <a class="localLink" href="/URL">URL</a>) a document describing the editorial principles of an <a class="localLink" href="/Organization">Organization</a> (or individual e.g. a <a class="localLink" href="/Person">Person</a> writing a blog) that relate to their activities as a publisher, e.g. ethics or diversity policies. When applied to a <a class="localLink" href="/CreativeWork">CreativeWork</a> (e.g. <a class="localLink" href="/NewsArticle">NewsArticle</a>) the principles are those of the party primarily responsible for the creation of the <a class="localLink" href="/CreativeWork">CreativeWork</a>.<br><br>
	 * 
	 * While such policies are most typically expressed in natural language, sometimes related information (e.g. indicating a <a class="localLink" href="/funder">funder</a>) can be expressed using schema.org terminology.
	 * @var String $publishingPrinciples
	 */
	protected $publishingPrinciples;

	 /**
	 * A review of the item. Supersedes <a href="/reviews">reviews</a>.
	 * @var String $review
	 */
	protected $review;

	 /**
	 * A pointer to products or services sought by the organization or person (demand).
	 * @var String $seeks
	 */
	protected $seeks;

	 /**
	 * A slogan or motto associated with the item.
	 * @var String $slogan
	 */
	protected $slogan;

	 /**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @var String $sponsor
	 */
	protected $sponsor;

	 /**
	 * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.<br> Inverse property: <a href="/parentOrganization">parentOrganization</a>.
	 * @var String $subOrganization
	 */
	protected $subOrganization;

	 /**
	 * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
	 * @var String $taxID
	 */
	protected $taxID;

	 /**
	 * The telephone number.
	 * @var String $telephone
	 */
	protected $telephone;

	 /**
	 * For an <a class="localLink" href="/Organization">Organization</a> (typically a <a class="localLink" href="/NewsMediaOrganization">NewsMediaOrganization</a>), a statement about policy on use of unnamed sources and the decision process required.
	 * @var String $unnamedSourcesPolicy
	 */
	protected $unnamedSourcesPolicy;

	 /**
	 * The Value-added Tax ID of the organization or person.
	 * @var String $vatID
	 */
	protected $vatID;


	/**
	 * @param $x
	 * @return $this
	 */
	public function setActionableFeedbackPolicy($x){
		$this->actionableFeedbackPolicy = new Text('ActionableFeedbackPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAddress($x){
		$this->address = new Text('Address',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAggregateRating($x){
		$this->aggregateRating = new Text('AggregateRating',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAlumni($x){
		$this->alumni = new Text('Alumni',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAreaServed($x){
		$this->areaServed = new Text('AreaServed',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setAward($x){
		$this->award = new Text('Award',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setBrand($x){
		$this->brand = new Text('Brand',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setContactPoint($x){
		$this->contactPoint = new Text('ContactPoint',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setCorrectionsPolicy($x){
		$this->correctionsPolicy = new Text('CorrectionsPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDepartment($x){
		$this->department = new Text('Department',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDissolutionDate($x){
		$this->dissolutionDate = new Text('DissolutionDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiversityPolicy($x){
		$this->diversityPolicy = new Text('DiversityPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDiversityStaffingReport($x){
		$this->diversityStaffingReport = new Text('DiversityStaffingReport',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setDuns($x){
		$this->duns = new Text('Duns',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmail($x){
		$this->email = new Text('Email',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEmployee($x){
		$this->employee = new Text('Employee',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEthicsPolicy($x){
		$this->ethicsPolicy = new Text('EthicsPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setEvent($x){
		$this->event = new Text('Event',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFaxNumber($x){
		$this->faxNumber = new Text('FaxNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFounder($x){
		$this->founder = new Text('Founder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFoundingDate($x){
		$this->foundingDate = new Text('FoundingDate',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFoundingLocation($x){
		$this->foundingLocation = new Text('FoundingLocation',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setFunder($x){
		$this->funder = new Text('Funder',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setGlobalLocationNumber($x){
		$this->globalLocationNumber = new Text('GlobalLocationNumber',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasCredential($x){
		$this->hasCredential = new Text('HasCredential',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasMerchantReturnPolicy($x){
		$this->hasMerchantReturnPolicy = new Text('HasMerchantReturnPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasOfferCatalog($x){
		$this->hasOfferCatalog = new Text('HasOfferCatalog',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setHasPOS($x){
		$this->hasPOS = new Text('HasPOS',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setInteractionStatistic($x){
		$this->interactionStatistic = new Text('InteractionStatistic',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setIsicV4($x){
		$this->isicV4 = new Text('IsicV4',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKnowsAbout($x){
		$this->knowsAbout = new Text('KnowsAbout',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setKnowsLanguage($x){
		$this->knowsLanguage = new Text('KnowsLanguage',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLegalName($x){
		$this->legalName = new Text('LegalName',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLeiCode($x){
		$this->leiCode = new Text('LeiCode',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLocation($x){
		$this->location = new Text('Location',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setLogo($x){
		$this->logo = new Text('Logo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMakesOffer($x){
		$this->makesOffer = new Text('MakesOffer',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMember($x){
		$this->member = new Text('Member',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setMemberOf($x){
		$this->memberOf = new Text('MemberOf',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNaics($x){
		$this->naics = new Text('Naics',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNonprofitStatus($x){
		$this->nonprofitStatus = new Text('NonprofitStatus',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setNumberOfEmployees($x){
		$this->numberOfEmployees = new Text('NumberOfEmployees',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOwnershipFundingInfo($x){
		$this->ownershipFundingInfo = new Text('OwnershipFundingInfo',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setOwns($x){
		$this->owns = new Text('Owns',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setParentOrganization($x){
		$this->parentOrganization = new Text('ParentOrganization',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setPublishingPrinciples($x){
		$this->publishingPrinciples = new Text('PublishingPrinciples',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setReview($x){
		$this->review = new Text('Review',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSeeks($x){
		$this->seeks = new Text('Seeks',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSlogan($x){
		$this->slogan = new Text('Slogan',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSponsor($x){
		$this->sponsor = new Text('Sponsor',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setSubOrganization($x){
		$this->subOrganization = new Text('SubOrganization',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTaxID($x){
		$this->taxID = new Text('TaxID',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setTelephone($x){
		$this->telephone = new Text('Telephone',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setUnnamedSourcesPolicy($x){
		$this->unnamedSourcesPolicy = new Text('UnnamedSourcesPolicy',$x);
		return $this;
	}

	/**
	 * @param $x
	 * @return $this
	 */
	public function setVatID($x){
		$this->vatID = new Text('VatID',$x);
		return $this;
	}


}